import Navbar from '@/components/navbar'
import './globals.css'
import type { Metadata } from 'next'
import { Raleway } from 'next/font/google'

const font = Raleway({ subsets: ['latin'] })

export const metadata: Metadata = {
  title: 'The Artist Republic',
  description: 'A Art Platform With No Introduction',
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">
      <body className={font.className}>
        <Navbar></Navbar>
        {children}
        </body>
    </html>
  )
}
