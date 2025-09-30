import React from 'react';
import { MapPin, Phone, Mail, Clock, Calendar, Navigation } from 'lucide-react';

const Contact = () => {
  return (
    <section id="contact" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">
            <span className="text-sky-600">Get In</span> <span className="text-teal-600">Touch</span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Ready to <span className="text-sky-600 font-semibold">take control of your health</span>? <span className="text-teal-600 font-semibold">Contact us today</span> to schedule 
            an appointment or learn more about our <span className="text-sky-600 font-semibold">comprehensive healthcare services</span>.
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-12">
          <div>
            <h3 className="text-2xl font-bold text-gray-900 mb-8">Contact Information</h3>
            
            <div className="space-y-6">
              <div className="flex items-start space-x-4">
                <div className="bg-sky-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                  <MapPin className="w-6 h-6 text-sky-600" />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900 mb-1">Address</h4>
                  <p className="text-gray-600">
                    123 Medical Center Drive<br />
                    Suite 200<br />
                    Healthcare City, HC 12345
                  </p>
                </div>
              </div>

              <div className="flex items-start space-x-4">
                <div className="bg-sky-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                  <Phone className="w-6 h-6 text-sky-600" />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900 mb-1">Phone</h4>
                  <p className="text-gray-600">
                    Office: <a href="tel:+1234567890" className="text-sky-600 hover:text-sky-700 transition-colors">(123) 456-7890</a><br />
                    Emergency: <a href="tel:+1234567891" className="text-sky-600 hover:text-sky-700 transition-colors">(123) 456-7891</a>
                  </p>
                </div>
              </div>

              <div className="flex items-start space-x-4">
                <div className="bg-sky-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                  <Mail className="w-6 h-6 text-sky-600" />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900 mb-1">Email</h4>
                  <p className="text-gray-600">
                    <a href="mailto:info@drmitchell.com" className="text-sky-600 hover:text-sky-700 transition-colors">info@drmitchell.com</a><br />
                    <a href="mailto:appointments@drmitchell.com" className="text-sky-600 hover:text-sky-700 transition-colors">appointments@drmitchell.com</a>
                  </p>
                </div>
              </div>

              <div className="flex items-start space-x-4">
                <div className="bg-sky-100 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                  <Clock className="w-6 h-6 text-sky-600" />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900 mb-1">Office Hours</h4>
                  <div className="text-gray-600 space-y-1">
                    <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                    <p>Saturday: 9:00 AM - 2:00 PM</p>
                    <p>Sunday: Closed</p>
                  </div>
                </div>
              </div>
            </div>

            <div className="mt-8 bg-gradient-to-r from-sky-500 to-teal-600 rounded-2xl p-6 text-white">
              <h4 className="font-semibold mb-4 flex items-center">
                <Calendar className="w-5 h-5 mr-2" />
                <span className="text-teal-100">Online</span> Appointment Booking
              </h4>
              <p className="mb-4 text-sky-100">
                Schedule your appointment <span className="text-white font-semibold">24/7</span> through our <span className="text-teal-100 font-semibold">secure online booking system</span>.
              </p>
              <button className="bg-white text-sky-600 px-6 py-2 rounded-lg font-semibold hover:bg-sky-50 transition-colors">
                <span className="font-bold">Book Online</span>
              </button>
            </div>
          </div>

          <div>
            <h3 className="text-2xl font-bold text-gray-900 mb-8">Send Us a Message</h3>
            
            <form className="space-y-6">
              <div className="grid sm:grid-cols-2 gap-6">
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-2">
                    First Name
                  </label>
                  <input 
                    type="text" 
                    className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-colors"
                    placeholder="Your first name"
                  />
                </div>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-2">
                    Last Name
                  </label>
                  <input 
                    type="text" 
                    className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-colors"
                    placeholder="Your last name"
                  />
                </div>
              </div>

              <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Email Address
                </label>
                <input 
                  type="email" 
                  className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-colors"
                  placeholder="your.email@example.com"
                />
              </div>

              <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Phone Number
                </label>
                <input 
                  type="tel" 
                  className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-colors"
                  placeholder="(123) 456-7890"
                />
              </div>

              <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Reason for Visit
                </label>
                <select className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-colors">
                  <option>General Consultation</option>
                  <option>Preventive Care</option>
                  <option>Chronic Disease Management</option>
                  <option>Women's Health</option>
                  <option>Mental Health Support</option>
                  <option>Geriatric Care</option>
                  <option>Other</option>
                </select>
              </div>

              <div>
                <label className="block text-sm font-medium text-gray-700 mb-2">
                  Message
                </label>
                <textarea 
                  rows={4}
                  className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent transition-colors"
                  placeholder="Please describe your concerns or questions..."
                ></textarea>
              </div>

              <button 
                type="submit"
                className="w-full bg-sky-500 text-white py-3 rounded-lg font-semibold hover:bg-sky-600 transition-colors"
              >
                Send Message
              </button>
            </form>

            <div className="mt-6 p-4 bg-sky-50 rounded-lg">
              <p className="text-sm text-sky-800">
                <strong className="text-sky-900">Note:</strong> This form is for <span className="text-sky-700 font-semibold">general inquiries only</span>. For <span className="text-red-600 font-bold">urgent medical concerns</span>, 
                please call our office directly at <span className="text-sky-700 font-bold">(123) 456-7890</span> or visit the nearest emergency room.
              </p>
            </div>
          </div>
        </div>

        <div className="mt-16 bg-gray-50 rounded-2xl p-8">
          <div className="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <h3 className="text-2xl font-bold text-gray-900 mb-4">
                <span className="text-sky-600">Find Our</span> <span className="text-teal-600">Office</span>
              </h3>
              <p className="text-gray-600 mb-6">
                Located in the heart of <span className="text-sky-600 font-semibold">Healthcare City</span>, our <span className="text-teal-600 font-semibold">modern medical facility</span> 
                offers <span className="text-sky-600 font-semibold">convenient parking</span> and easy access via public transportation.
              </p>
              <div className="flex items-center space-x-4">
                <Navigation className="w-5 h-5 text-sky-600" />
                <span className="text-gray-700">Easy highway access from <span className="text-sky-600 font-semibold">I-95</span> and <span className="text-sky-600 font-semibold">Route 1</span></span>
              </div>
            </div>
            <div className="bg-white rounded-lg p-6 shadow-md">
              <div className="aspect-video bg-gradient-to-br from-sky-200 to-teal-200 rounded-lg flex items-center justify-center">
                <p className="text-sky-700 font-medium">Interactive Map Coming Soon</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Contact;