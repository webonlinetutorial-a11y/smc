<?php

class AdminController extends BaseController
{
    private AdminDashboardService $dashboardService;

    public function __construct(?AdminDashboardService $dashboardService = null)
    {
        $this->dashboardService = $dashboardService ?? new AdminDashboardService();
    }

    public function dashboard(): array
    {
        return [
            'title' => 'Admin Dashboard',
            'summaryItems' => $this->dashboardService->summaryItems(),
            'moduleItems' => $this->dashboardService->moduleItems(),
        ];
    }
}
