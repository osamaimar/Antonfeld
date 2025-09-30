import React from 'react';
import { Phone, Mail, MapPin, Clock, Facebook, Twitter, Linkedin, Instagram } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="bg-gray-900 text-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div className="grid lg:grid-cols-4 gap-8">
          <div className="lg:col-span-2">
            <div className="flex items-center space-x-2 mb-6">
              <div className="w-10 h-10 bg-sky-500 rounded-full flex items-center justify-center">
                <span className="text-white font-bold">Dr</span>
              </div>
              <span className="text-2xl font-bold">Dr. Sarah Mitchell</span>
            </div>
            <p className="text-gray-400 mb-6 max-w-md leading-relaxed">
              Providing <span className="text-sky-400 font-semibold">compassionate, comprehensive healthcare</span> with over <span className="text-white font-bold">15 years of experience</span>. 
              Your wellness journey starts here with <span className="text-sky-400 font-semibold">personalized care</span> tailored just for you.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="bg-gray-800 p-3 rounded-lg hover:bg-sky-600 transition-colors">
                <Facebook className="w-5 h-5" />
              </a>
              <a href="#" className="bg-gray-800 p-3 rounded-lg hover:bg-sky-600 transition-colors">
                <Twitter className="w-5 h-5" />
              </a>
              <a href="#" className="bg-gray-800 p-3 rounded-lg hover:bg-sky-600 transition-colors">
                <Linkedin className="w-5 h-5" />
              </a>
              <a href="#" className="bg-gray-800 p-3 rounded-lg hover:bg-sky-600 transition-colors">
                <Instagram className="w-5 h-5" />
              </a>
            </div>
          </div>

          <div>
            <h3 className="text-lg font-semibold mb-6">Quick Links</h3>
            <ul className="space-y-3">
              <li><a href="#home" className="text-gray-400 hover:text-white transition-colors">Home</a></li>
              <li><a href="#about" className="text-gray-400 hover:text-white transition-colors">About Dr. Mitchell</a></li>
              <li><a href="#services" className="text-gray-400 hover:text-white transition-colors">Services</a></li>
              <li><a href="#testimonials" className="text-gray-400 hover:text-white transition-colors">Testimonials</a></li>
              <li><a href="#contact" className="text-gray-400 hover:text-white transition-colors">Contact</a></li>
              <li><a href="#" className="text-gray-400 hover:text-white transition-colors">Patient Portal</a></li>
              <li><a href="#" className="text-gray-400 hover:text-white transition-colors">Insurance</a></li>
            </ul>
          </div>

          <div>
            <h3 className="text-lg font-semibold mb-6">Contact Info</h3>
            <div className="space-y-4">
              <div className="flex items-start space-x-3">
                <MapPin className="w-5 h-5 text-sky-400 mt-0.5 flex-shrink-0" />
                <div className="text-gray-400">
                  <p>123 Medical Center Drive</p>
                  <p>Suite 200</p>
                  <p>Healthcare City, HC 12345</p>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <Phone className="w-5 h-5 text-sky-400 flex-shrink-0" />
                <a href="tel:+1234567890" className="text-gray-400 hover:text-white transition-colors">
                  (123) 456-7890
                </a>
              </div>
              <div className="flex items-center space-x-3">
                <Mail className="w-5 h-5 text-sky-400 flex-shrink-0" />
                <a href="mailto:info@drmitchell.com" className="text-gray-400 hover:text-white transition-colors">
                  info@drmitchell.com
                </a>
              </div>
              <div className="flex items-start space-x-3">
                <Clock className="w-5 h-5 text-sky-400 mt-0.5 flex-shrink-0" />
                <div className="text-gray-400">
                  <p>Mon-Fri: 8AM-6PM</p>
                  <p>Sat: 9AM-2PM</p>
                  <p>Sun: Closed</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="border-t border-gray-800 mt-12 pt-8">
          <div className="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <p className="text-gray-400 text-sm">
              © 2024 <span className="text-sky-400 font-semibold">Dr. Sarah Mitchell Medical Practice</span>. All rights reserved.
            </p>
            <div className="flex space-x-6 text-sm">
              <a href="#" className="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
              <a href="#" className="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
              <a href="#" className="text-gray-400 hover:text-white transition-colors"><span className="text-sky-400 font-semibold">HIPAA Notice</span></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;