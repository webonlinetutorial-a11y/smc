<?php

function lucideIcon(string $name, string $className = 'lucide-icon'): string
{
    $icons = [
        'arrow-left' => '<path d="m12 19-7-7 7-7"></path><path d="M19 12H5"></path>',
        'arrow-right' => '<path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path>',
        'award' => '<circle cx="12" cy="8" r="6"></circle><path d="M15.5 13.2 17 22l-5-3-5 3 1.5-8.8"></path>',
        'badge-check' => '<path d="M3.9 7.8 2.6 5.3l2.7-1.1 1.1-2.7 2.5 1.3 3.1-1.3 3.1 1.3 2.5-1.3 1.1 2.7 2.7 1.1-1.3 2.5 1.3 3.1-1.3 3.1 1.3 2.5-2.7 1.1-1.1 2.7-2.5-1.3-3.1 1.3-3.1-1.3-2.5 1.3-1.1-2.7-2.7-1.1 1.3-2.5-1.3-3.1 1.3-3.1Z"></path><path d="m9 12 2 2 4-4"></path>',
        'boxes' => '<path d="m7.5 4.3 4.5 2.6 4.5-2.6"></path><path d="M7.5 4.3 12 1.8l4.5 2.5v5.2L12 12 7.5 9.5Z"></path><path d="m3 13 4.5 2.6L12 13"></path><path d="M3 13l4.5-2.6L12 13v5.2l-4.5 2.6L3 18.2Z"></path><path d="m12 13 4.5 2.6L21 13"></path><path d="m12 13 4.5-2.6L21 13v5.2l-4.5 2.6-4.5-2.6Z"></path>',
        'chevron-down' => '<path d="m6 9 6 6 6-6"></path>',
        'chevron-right' => '<path d="m9 18 6-6-6-6"></path>',
        'clock' => '<circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path>',
        'circle-help' => '<circle cx="12" cy="12" r="10"></circle><path d="M9.1 9a3 3 0 1 1 5.8 1c-.4.8-1.2 1.2-1.9 1.7-.7.5-1 1-1 1.8"></path><path d="M12 17h.01"></path>',
        'circle-play' => '<circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon>',
        'file-text' => '<path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path>',
        'headphones' => '<path d="M3 14v-2a9 9 0 0 1 18 0v2"></path><path d="M21 19a2 2 0 0 1-2 2h-1v-7h3Z"></path><path d="M3 19a2 2 0 0 0 2 2h1v-7H3Z"></path>',
        'list' => '<path d="M8 6h13"></path><path d="M8 12h13"></path><path d="M8 18h13"></path><path d="M3 6h.01"></path><path d="M3 12h.01"></path><path d="M3 18h.01"></path>',
        'heart-handshake' => '<path d="M19.4 14.9 12 22l-7.4-7.1a5 5 0 0 1 7.1-7.1L12 8l.3-.2a5 5 0 0 1 7.1 7.1Z"></path><path d="m8 14 2-2 2 2 2-2 2 2"></path>',
        'mail' => '<rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-10 6L2 7"></path>',
        'map-pin' => '<path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle>',
        'menu' => '<path d="M4 12h16"></path><path d="M4 18h16"></path><path d="M4 6h16"></path>',
        'package' => '<path d="m7.5 4.3 9 5.2"></path><path d="M21 8.5 12 14 3 8.5"></path><path d="M12 22V14"></path><path d="M3 8.5 12 3l9 5.5V19l-9 3-9-3Z"></path>',
        'phone' => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.7.6 2.5a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6.4 6.4l1.3-1.2a2 2 0 0 1 2.1-.5c.8.3 1.6.5 2.5.6a2 2 0 0 1 1.7 2Z"></path>',
        'search' => '<circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path>',
        'send' => '<path d="m22 2-7 20-4-9-9-4Z"></path><path d="M22 2 11 13"></path>',
        'settings' => '<path d="M12.2 2h-.4a2 2 0 0 0-2 1.7l-.1.7a2 2 0 0 1-1.1 1.4l-.7.4a2 2 0 0 1-1.8.1l-.7-.3a2 2 0 0 0-2.4.9l-.2.3a2 2 0 0 0 .4 2.6l.6.4a2 2 0 0 1 .7 1.6v.8a2 2 0 0 1-.7 1.6l-.6.4a2 2 0 0 0-.4 2.6l.2.3a2 2 0 0 0 2.4.9l.7-.3a2 2 0 0 1 1.8.1l.7.4a2 2 0 0 1 1.1 1.4l.1.7a2 2 0 0 0 2 1.7h.4a2 2 0 0 0 2-1.7l.1-.7a2 2 0 0 1 1.1-1.4l.7-.4a2 2 0 0 1 1.8-.1l.7.3a2 2 0 0 0 2.4-.9l.2-.3a2 2 0 0 0-.4-2.6l-.6-.4a2 2 0 0 1-.7-1.6v-.8a2 2 0 0 1 .7-1.6l.6-.4a2 2 0 0 0 .4-2.6l-.2-.3a2 2 0 0 0-2.4-.9l-.7.3a2 2 0 0 1-1.8-.1l-.7-.4a2 2 0 0 1-1.1-1.4l-.1-.7a2 2 0 0 0-2-1.7Z"></path><circle cx="12" cy="12" r="3"></circle>',
        'shield-check' => '<path d="M20 13c0 5-3.5 7.5-7.6 8.8a1 1 0 0 1-.8 0C7.5 20.5 4 18 4 13V5l8-3 8 3Z"></path><path d="m9 12 2 2 4-4"></path>',
        'smile' => '<circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><path d="M9 9h.01"></path><path d="M15 9h.01"></path>',
        'star' => '<path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8-6.2-3.3L5.8 21 7 14.2 2 9.3l6.9-1Z"></path>',
        'truck' => '<path d="M10 17h4V5H2v12h3"></path><path d="M14 8h4l4 4v5h-3"></path><circle cx="7.5" cy="17.5" r="2.5"></circle><circle cx="16.5" cy="17.5" r="2.5"></circle>',
        'user' => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>',
        'users' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.9"></path><path d="M16 3.1a4 4 0 0 1 0 7.8"></path>',
        'wrench' => '<path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L2 19l3 3 7.3-7.3a4 4 0 0 0 5.4-5.4l-2.4 2.4-2.8-.8-.8-2.8Z"></path>',
    ];

    if (!array_key_exists($name, $icons)) {
        return '';
    }

    return '<svg class="' . e($className) . '" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">' . $icons[$name] . '</svg>';
}

/**
 * @return string[]
 */
function indianStateList(): array
{
    return [
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chhattisgarh', 'Goa', 'Gujarat',
        'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh',
        'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab',
        'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand',
        'West Bengal', 'Andaman and Nicobar Islands', 'Chandigarh',
        'Dadra and Nagar Haveli and Daman and Diu', 'Delhi', 'Jammu and Kashmir', 'Ladakh',
        'Lakshadweep', 'Puducherry',
    ];
}
