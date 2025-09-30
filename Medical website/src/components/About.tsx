import React from 'react';
import { GraduationCap, Stethoscope, Heart, CheckCircle } from 'lucide-react';

const About = () => {
  return (
    <section id="about" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 className="text-4xl font-bold text-gray-900 mb-6">
              Meet Dr. Sarah Mitchell
            </h2>
            <p className="text-lg text-gray-700 mb-6 leading-relaxed">
              With over <span className="text-sky-600 font-semibold">15 years of experience</span> in family medicine, Dr. Sarah Mitchell is 
              dedicated to providing <span className="text-teal-600 font-semibold">comprehensive, personalized healthcare</span> to patients of all ages. 
              Her approach combines <span className="text-sky-600 font-semibold">evidence-based medicine</span> with <span className="text-teal-600 font-semibold">compassionate care</span>.
            </p>
            <p className="text-lg text-gray-700 mb-8 leading-relaxed">
              Dr. Mitchell believes in building <span className="text-sky-600 font-semibold">long-term relationships</span> with her patients, 
              focusing on <span className="text-teal-600 font-semibold">preventive care</span> and educating families about <span className="text-sky-600 font-semibold">healthy lifestyle choices</span>.
            </p>

            <div className="grid sm:grid-cols-2 gap-6 mb-8">
              <div className="flex items-start space-x-3">
                <GraduationCap className="w-6 h-6 text-sky-500 mt-1 flex-shrink-0" />
                <div>
                  <h4 className="font-semibold text-gray-900">Education</h4>
                  <p className="text-gray-600">MD from <span className="text-sky-600 font-semibold">Harvard Medical School</span></p>
                </div>
              </div>
              <div className="flex items-start space-x-3">
                <Stethoscope className="w-6 h-6 text-sky-500 mt-1 flex-shrink-0" />
                <div>
                  <h4 className="font-semibold text-gray-900">Specialization</h4>
                  <p className="text-gray-600"><span className="text-teal-600 font-semibold">Family Medicine</span> & <span className="text-teal-600 font-semibold">Internal Medicine</span></p>
                </div>
              </div>
              <div className="flex items-start space-x-3">
                <Heart className="w-6 h-6 text-sky-500 mt-1 flex-shrink-0" />
                <div>
                  <h4 className="font-semibold text-gray-900">Experience</h4>
                  <p className="text-gray-600"><span className="text-sky-600 font-bold">15+ Years</span> in Practice</p>
                </div>
              </div>
              <div className="flex items-start space-x-3">
                <CheckCircle className="w-6 h-6 text-sky-500 mt-1 flex-shrink-0" />
                <div>
                  <h4 className="font-semibold text-gray-900">Board Certified</h4>
                  <p className="text-gray-600"><span className="text-teal-600 font-semibold">American Board of Family Medicine</span></p>
                </div>
              </div>
            </div>

            <div className="bg-sky-50 rounded-lg p-6">
              <h4 className="font-semibold text-gray-900 mb-3">Professional Memberships</h4>
              <ul className="space-y-2 text-gray-700">
                <li>• American Academy of Family Physicians</li>
                <li>• American Medical Association</li>
                <li>• State Medical Society</li>
              </ul>
            </div>
          </div>

          <div className="relative">
            <div className="bg-gradient-to-br from-sky-100 to-teal-100 rounded-3xl p-8 shadow-xl">
              <div className="bg-white rounded-2xl p-6 shadow-lg mb-6">
                <h3 className="text-xl font-bold text-gray-900 mb-4">Office Hours</h3>
                <div className="space-y-3 text-gray-700">
                  <div className="flex justify-between">
                    <span>Monday - Friday</span>
                    <span className="font-medium">8:00 AM - 6:00 PM</span>
                  </div>
                  <div className="flex justify-between">
                    <span>Saturday</span>
                    <span className="font-medium">9:00 AM - 2:00 PM</span>
                  </div>
                  <div className="flex justify-between">
                    <span>Sunday</span>
                    <span className="font-medium text-red-600">Closed</span>
                  </div>
                </div>
              </div>

              <div className="bg-white rounded-2xl p-6 shadow-lg">
                <h3 className="text-xl font-bold text-gray-900 mb-4">Emergency Contact</h3>
                <p className="text-gray-700 mb-3">
                  For urgent medical concerns after hours, please call our emergency line:
                </p>
                <a href="tel:+1234567890" className="text-sky-600 font-semibold text-lg hover:text-sky-700 transition-colors">
                  (123) 456-7890
                </a>
              </div>
            </div>

            {/* Decorative elements */}
            <div className="absolute -top-4 -right-4 w-20 h-20 bg-sky-200/50 rounded-full blur-xl"></div>
            <div className="absolute -bottom-4 -left-4 w-16 h-16 bg-teal-200/50 rounded-full blur-lg"></div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;