import React from 'react';
import { HeartPulse, Shield, Baby, Activity, Eye, Brain } from 'lucide-react';

const Services = () => {
  const services = [
    {
      icon: HeartPulse,
      title: "General Consultation",
      description: "Comprehensive health assessments, routine check-ups, and personalized treatment plans for optimal wellness.",
      features: ["Physical examinations", "Health screenings", "Treatment planning", "Follow-up care"]
    },
    {
      icon: Shield,
      title: "Preventive Care",
      description: "Proactive healthcare focused on disease prevention, vaccinations, and lifestyle counseling.",
      features: ["Annual physicals", "Vaccinations", "Cancer screenings", "Lifestyle counseling"]
    },
    {
      icon: Activity,
      title: "Chronic Disease Management",
      description: "Specialized care for ongoing health conditions with continuous monitoring and adjustment.",
      features: ["Diabetes management", "Hypertension control", "Heart disease care", "Regular monitoring"]
    },
    {
      icon: Baby,
      title: "Women's Health",
      description: "Comprehensive women's healthcare services addressing unique health needs at every life stage.",
      features: ["Annual exams", "Reproductive health", "Prenatal care", "Menopause management"]
    },
    {
      icon: Eye,
      title: "Mental Health Support",
      description: "Compassionate mental health services focusing on overall emotional and psychological well-being.",
      features: ["Anxiety management", "Depression screening", "Stress counseling", "Therapy referrals"]
    },
    {
      icon: Brain,
      title: "Geriatric Care",
      description: "Specialized healthcare services designed specifically for older adults and age-related conditions.",
      features: ["Age-related screenings", "Medication management", "Mobility assessment", "Cognitive health"]
    }
  ];

  return (
    <section id="services" className="py-20 bg-gradient-to-b from-gray-50 to-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">
            <span className="text-sky-600">Comprehensive</span> Healthcare <span className="text-teal-600">Services</span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            From <span className="text-sky-600 font-semibold">preventive care</span> to <span className="text-teal-600 font-semibold">specialized treatment</span>, we offer a <span className="text-sky-600 font-semibold">full range of medical services</span> 
            to keep you and your family <span className="text-teal-600 font-semibold">healthy at every stage of life</span>.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {services.map((service, index) => {
            const IconComponent = service.icon;
            return (
              <div 
                key={index}
                className="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100"
              >
                <div className="bg-sky-100 w-16 h-16 rounded-full flex items-center justify-center mb-6">
                  <IconComponent className="w-8 h-8 text-sky-600" />
                </div>
                
                <h3 className="text-xl font-bold text-gray-900 mb-3">
                  {service.title}
                </h3>
                
                <p className="text-gray-600 mb-6 leading-relaxed">
                  {service.description}
                </p>
                
                <ul className="space-y-2">
                  {service.features.map((feature, featureIndex) => (
                    <li key={featureIndex} className="flex items-center text-gray-700">
                      <div className="w-2 h-2 bg-sky-500 rounded-full mr-3 flex-shrink-0"></div>
                      {feature}
                    </li>
                  ))}
                </ul>

                <button className="mt-6 w-full bg-sky-500 text-white py-3 rounded-lg font-medium hover:bg-sky-600 transition-colors">
                  <span className="font-semibold">Learn More</span>
                </button>
              </div>
            );
          })}
        </div>

        <div className="text-center mt-12">
          <div className="bg-sky-500 text-white rounded-2xl p-8 shadow-xl">
            <h3 className="text-2xl font-bold mb-4">Need <span className="text-teal-200">Immediate Care</span>?</h3>
            <p className="text-sky-100 mb-6">
              We offer <span className="text-white font-semibold">same-day appointments</span> for urgent medical concerns. 
              Don't wait - <span className="text-teal-200 font-bold">your health is our priority</span>.
            </p>
            <button className="bg-white text-sky-600 px-8 py-3 rounded-lg font-semibold hover:bg-sky-50 transition-colors">
              <span className="font-bold">Book Same-Day Appointment</span>
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Services;