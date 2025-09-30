import React, { useState } from 'react';
import { Menu, X, Phone, Calendar } from 'lucide-react';

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  return (
    <header className="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 shadow-sm">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center h-16">
          <div className="flex items-center space-x-2">
            <div className="w-8 h-8 bg-sky-500 rounded-full flex items-center justify-center">
              <span className="text-white font-bold text-sm">Dr</span>
            </div>
            <span className="text-xl font-bold text-gray-900">Dr. Sarah Mitchell</span>
          </div>

          <nav className="hidden md:flex space-x-8">
            <a href="#home" className="text-gray-700 hover:text-sky-600 transition-colors">Home</a>
            <a href="#about" className="text-gray-700 hover:text-sky-600 transition-colors">About</a>
            <a href="#services" className="text-gray-700 hover:text-sky-600 transition-colors">Services</a>
            <a href="#testimonials" className="text-gray-700 hover:text-sky-600 transition-colors">Testimonials</a>
            <a href="#contact" className="text-gray-700 hover:text-sky-600 transition-colors">Contact</a>
          </nav>

          <div className="hidden md:flex items-center space-x-4">
            <a href="tel:+1234567890" className="flex items-center space-x-2 text-gray-700 hover:text-sky-600 transition-colors">
              <Phone size={16} />
              <span className="font-semibold">(123) 456-7890</span>
            </a>
            <button className="bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-600 transition-colors flex items-center space-x-2">
              <Calendar size={16} />
              <span className="font-semibold">Book Appointment</span>
            </button>
          </div>

          <button 
            className="md:hidden"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
          >
            {isMenuOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>

        {isMenuOpen && (
          <div className="md:hidden py-4 border-t">
            <div className="flex flex-col space-y-4">
              <a href="#home" className="text-gray-700 hover:text-sky-600 transition-colors">Home</a>
              <a href="#about" className="text-gray-700 hover:text-sky-600 transition-colors">About</a>
              <a href="#services" className="text-gray-700 hover:text-sky-600 transition-colors">Services</a>
              <a href="#testimonials" className="text-gray-700 hover:text-sky-600 transition-colors">Testimonials</a>
              <a href="#contact" className="text-gray-700 hover:text-sky-600 transition-colors">Contact</a>
              <div className="pt-4 border-t">
                <a href="tel:+1234567890" className="flex items-center space-x-2 text-gray-700 hover:text-sky-600 transition-colors mb-3">
                  <Phone size={16} />
                  <span className="font-semibold">(123) 456-7890</span>
                </a>
                <button className="bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-600 transition-colors flex items-center space-x-2">
                  <Calendar size={16} />
                  <span className="font-semibold">Book Appointment</span>
                </button>
              </div>
            </div>
          </div>
        )}
      </div>
    </header>
  );
};

export default Header;