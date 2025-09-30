import React from 'react';
import { Calendar, Shield, Award, Users } from 'lucide-react';

const Hero = () => {
  return (
    <section id="home" className="relative min-h-screen bg-gradient-to-br from-sky-400 via-sky-500 to-sky-600 overflow-hidden">
      {/* Background Elements */}
      <div className="absolute inset-0">
        <div className="absolute top-20 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl"></div>
        <div className="absolute top-40 right-20 w-24 h-24 bg-teal-300/20 rounded-full blur-lg"></div>
        <div className="absolute bottom-40 left-1/4 w-40 h-40 bg-white/5 rounded-full blur-2xl"></div>
        <div className="absolute bottom-20 right-10 w-28 h-28 bg-sky-300/20 rounded-full blur-xl"></div>
        
        {/* Curved background elements */}
        <svg className="absolute bottom-0 w-full h-64" viewBox="0 0 1200 320" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0,96L48,112C96,128,192,160,288,186.7C384,213,480,235,576,213.3C672,192,768,128,864,128C960,128,1056,192,1152,208C1200,224,1248,192,1296,165.3L1344,139V320H1296C1248,320,1152,320,1056,320C960,320,864,320,768,320C672,320,576,320,480,320C384,320,288,320,192,320C96,320,48,320,24,320H0V96Z" fill="rgba(255,255,255,0.1)"/>
        </svg>
        
        <svg className="absolute bottom-0 w-full h-48" viewBox="0 0 1200 320" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,170.7C672,149,768,139,864,154.7C960,171,1056,213,1152,213.3C1200,213,1248,171,1296,149.3L1344,128V320H1296C1248,320,1152,320,1056,320C960,320,864,320,768,320C672,320,576,320,480,320C384,320,288,320,192,320C96,320,48,320,24,320H0V160Z" fill="rgba(255,255,255,0.05)"/>
        </svg>
      </div>

      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <div className="grid lg:grid-cols-2 gap-12 items-center min-h-screen py-20">
          <div className="text-white">
            <h1 className="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              Your Health,
              <span className="block text-teal-100">Our Priority</span>
            </h1>
            <p className="text-xl text-sky-100 mb-8 leading-relaxed">
              Providing <span className="text-teal-200 font-semibold">compassionate, comprehensive healthcare</span> with over <span className="text-white font-bold">15 years of experience</span>. 
              Your wellness journey starts here with <span className="text-teal-200 font-semibold">personalized care</span> tailored just for you.
            </p>
            
            <div className="flex flex-col sm:flex-row gap-4 mb-12">
              <button className="bg-white text-sky-600 px-8 py-4 rounded-lg font-semibold hover:bg-sky-50 transition-all transform hover:scale-105 flex items-center justify-center space-x-2 shadow-lg">
                <Calendar size={20} />
                <span>Schedule Appointment</span>
              </button>
              <button className="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-sky-600 transition-all">
                Learn More
              </button>
            </div>

            <div className="grid grid-cols-3 gap-6">
              <div className="text-center">
                <Shield className="w-8 h-8 mx-auto mb-2 text-teal-200" />
                <div className="text-2xl font-bold text-white">15+</div>
                <div className="text-sky-100 text-sm">Years Experience</div>
              </div>
              <div className="text-center">
                <Users className="w-8 h-8 mx-auto mb-2 text-teal-200" />
                <div className="text-2xl font-bold text-white">5000+</div>
                <div className="text-sky-100 text-sm">Patients Treated</div>
              </div>
              <div className="text-center">
                <Award className="w-8 h-8 mx-auto mb-2 text-teal-200" />
                <div className="text-2xl font-bold text-white">98%</div>
                <div className="text-sky-100 text-sm">Satisfaction Rate</div>
              </div>
            </div>
          </div>

          <div className="relative">
            <div className="bg-white/10 backdrop-blur-lg rounded-3xl p-8 shadow-2xl border border-white/20">
              <div className="bg-white rounded-2xl p-6 shadow-xl">
                <h3 className="text-2xl font-bold text-gray-900 mb-4">
                  <span className="text-sky-600">Quick</span> Appointment
                </h3>
                <form className="space-y-4">
                  <div>
                    <input 
                      type="text" 
                      placeholder="Full Name" 
                      className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent"
                    />
                  </div>
                  <div>
                    <input 
                      type="email" 
                      placeholder="Email Address" 
                      className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent"
                    />
                  </div>
                  <div>
                    <input 
                      type="tel" 
                      placeholder="Phone Number" 
                      className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent"
                    />
                  </div>
                  <div>
                    <select className="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-sky-500 focus:border-transparent">
                      <option>Select Service</option>
                      <option>General Consultation</option>
                      <option>Preventive Care</option>
                      <option>Chronic Disease Management</option>
                      <option>Women's Health</option>
                    </select>
                  </div>
                  <button type="submit" className="w-full bg-sky-500 text-white py-3 rounded-lg font-semibold hover:bg-sky-600 transition-colors">
                    <span className="font-bold">Book Appointment</span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;