import { Link } from '@inertiajs/react';

export default function DashboardCard({ title, href, children }) {
    return (
        <Link
            href={href}
            className="block rounded-lg border bg-white p-6 shadow-sm transition hover:shadow-md"
        >
            <h3 className="mb-2 text-lg font-semibold">{title}</h3>
            {children && (
                <p className="text-sm text-gray-600">{children}</p>
            )}
        </Link>
    );
}
