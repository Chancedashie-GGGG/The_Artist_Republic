import Navbar from '@/components/navbar'
import './globals.css'
import type { Metadata } from 'next'
import { Raleway } from 'next/font/google'
import Footer from '@/components/footer'
import { siteConfig } from '@/config/site'

const font = Raleway({ subsets: ['latin'] })

export const metadata: Metadata = {
  title: {
    default: siteConfig.name,
    template: `%s | ${siteConfig.name}`,
  },
  description: siteConfig.description,
  icons: [
    {
      url: "/icon.svg",
      href: "/icon.svg"
    }
  ]
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
        <div className='flex justify-center w-full h-auto'>
          <div className='lg:w-4/6 w-full p-3 bg-zinc-900 overflow-hidden'>
            {children}
          </div>
        </div>
        <Footer></Footer>
      </body>
    </html>
  )
}
