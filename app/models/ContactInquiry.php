<?php

class ContactInquiry extends BaseModel
{
    public function latest(): array
    {
        return $this->fetchAll('SELECT * FROM contact_inquiries ORDER BY created_at DESC, id DESC LIMIT 100');
    }

    public function create(array $data): void
    {
        $this->execute(
            'INSERT INTO contact_inquiries (
                inquiry_type,
                visitor_name,
                email,
                phone,
                location,
                message,
                product_id,
                brand_id,
                document_id,
                source_page
            ) VALUES (
                :inquiry_type,
                :visitor_name,
                :email,
                :phone,
                :location,
                :message,
                :product_id,
                :brand_id,
                :document_id,
                :source_page
            )',
            $data
        );
    }

    public function updateStatus(int $id, string $status, ?int $userId): void
    {
        $this->execute(
            'UPDATE contact_inquiries
             SET status = :status, reviewed_by = :reviewed_by, status_updated_at = NOW()
             WHERE id = :id',
            ['id' => $id, 'status' => $status, 'reviewed_by' => $userId]
        );
    }
}
