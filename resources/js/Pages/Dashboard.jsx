import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import DashboardCard from '@/Components/DashboardCard';
import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
                    <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <DashboardCard title="Expense Tracker" href={route('expenses')}>
                            Track daily spending and categorize expenses.
                        </DashboardCard>
                        <DashboardCard title="BNPL" href={route('bnpl')}>
                            Monitor buy-now-pay-later balances.
                        </DashboardCard>
                        <DashboardCard title="Credit Cards" href={route('credit-cards')}>
                            Manage credit card accounts and payments.
                        </DashboardCard>
                        <DashboardCard title="House Loan" href={route('house-loan')}>
                            Keep tabs on your mortgage status.
                        </DashboardCard>
                        <DashboardCard title="Goals" href={route('goals')}>
                            Set and monitor savings goals.
                        </DashboardCard>
                        <DashboardCard title="Jars" href={route('jars')}>
                            Allocate budgets into separate jars.
                        </DashboardCard>
                        <DashboardCard title="Wishlist" href={route('wishlist')}>
                            Save items you're planning to buy.
                        </DashboardCard>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
