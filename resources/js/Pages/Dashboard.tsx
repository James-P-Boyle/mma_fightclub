import React, { useState } from 'react';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { PageProps } from '@/types';

interface DashboardProps extends PageProps {
    users: any[];
}

export default function Dashboard({ auth, users }: DashboardProps) {
    const [selectedMonth, setSelectedMonth] = useState<number | null>(null);

    // Function to filter attendances by selected month
    const filterAttendancesByMonth = (attendances: any[], month: number | null) => {
        if (month === null) {
            return attendances;
        } else {
            return attendances.filter(attendance => {
                const attendanceDate = new Date(attendance.attendance_date);
                return attendanceDate.getMonth() === month;
            });
        }
    };

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-600">
                            <h2 className="text-lg font-semibold text-gray-900 dark:text-gray-200">Users and Their Attendance</h2>
                            <div className="mt-4">
                                <div className="flex items-center mb-4 space-x-4">
                                    <span className="text-sm text-gray-500 dark:text-gray-400">Filter by month:</span>
                                    <select
                                        className="px-3 py-1 border border-gray-300 rounded-md dark:border-gray-600 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500"
                                        value={selectedMonth ?? ''}
                                        onChange={e => setSelectedMonth(parseInt(e.target.value))}
                                    >
                                        <option value="">All</option>
                                        <option value="0">January</option>
                                        <option value="1">February</option>
                                        <option value="2">March</option>
                                        <option value="3">April</option>
                                        <option value="4">May</option>
                                        <option value="5">June</option>
                                        <option value="6">July</option>
                                        <option value="7">August</option>
                                        <option value="8">September</option>
                                        <option value="9">October</option>
                                        <option value="10">November</option>
                                        <option value="11">December</option>
                                    </select>
                                </div>
                                <table className="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                    <thead className="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" className="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-400">User Name</th>
                                            <th scope="col" className="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-400">Attendance Dates</th>
                                        </tr>
                                    </thead>
                                    <tbody className="bg-white divide-y divide-gray-200 dark:divide-gray-600">
                                        {users.map(user => (
                                            <tr key={user.id}>
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <div className="text-sm font-medium text-gray-900 dark:text-gray-200">{user.name}</div>
                                                </td>
                                                <td className="px-6 py-4 whitespace-nowrap">
                                                    <ul className="text-sm text-gray-600 dark:text-gray-400">
                                                        {filterAttendancesByMonth(user.attendances, selectedMonth).map(attendance => (
                                                            <li key={attendance.id}>{new Date(attendance.attendance_date).toLocaleDateString()}</li>
                                                        ))}
                                                    </ul>
                                                </td>
                                            </tr>
                                        ))}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
