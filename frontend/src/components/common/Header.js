import React from 'react'
import { Link } from 'react-router-dom'

const Header = () => {
  return (
    <header>
        <h1 className='bg-gray-300 flex items-center  justify-center text-slate-800'>Manage your budget</h1>

        <div className='bg-gray-500 flex'>
        <ul className='flex float-left'>
          <li className='p-4'><Link to='/'>Home</Link></li>
        </ul>
        <ul className='flex float-right'>
            <li className='p-4'><Link to='/dashboard'>Dashboard</Link></li>
            <li className='p-4'><Link to='/settings'>Settings</Link></li>
        </ul>
        </div>
    </header>
  )
}

export default Header