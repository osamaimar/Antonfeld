import React from 'react';
import { Star, Quote } from 'lucide-react';

const Testimonials = () => {
  const testimonials = [
    {
      name: "Jennifer Adams",
      age: 34,
      condition: "Preventive Care",
      rating: 5,
      text: "Dr. Mitchell has been my family doctor for over 5 years. Her attention to detail and genuine care for her patients is exceptional. She always takes the time to listen and explain everything thoroughly.",
      image: "https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=150"
    },
    {
      name: "Robert Chen",
      age: 45,
      condition: "Diabetes Management",
      rating: 5,
      text: "Managing my diabetes has become so much easier with Dr. Mitchell's guidance. She developed a comprehensive treatment plan that fits my lifestyle, and my blood sugar levels have never been better.",
      image: "https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=150"
    },
    {
      name: "Maria Rodriguez",
      age: 28,
      condition: "Women's Health",
      rating: 5,
      text: "Dr. Mitchell made me feel comfortable and supported throughout my pregnancy. Her expertise and compassionate care gave me confidence during this important time in my life.",
      image: "https://images.pexels.com/photos/1102341/pexels-photo-1102341.jpeg?auto=compress&cs=tinysrgb&w=150"
    },
    {
      name: "William Thompson",
      age: 62,
      condition: "Heart Disease Care",
      rating: 5,
      text: "After my heart attack, Dr. Mitchell developed a comprehensive recovery plan that has greatly improved my quality of life. Her ongoing monitoring and adjustments to my treatment have been invaluable.",
      image: "https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=150"
    },
    {
      name: "Emily Watson",
      age: 52,
      condition: "Mental Health Support",
      rating: 5,
      text: "Dr. Mitchell's holistic approach to healthcare includes mental wellness. She helped me through a difficult period with empathy and practical solutions that really made a difference.",
      image: "https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=150"
    },
    {
      name: "David Park",
      age: 38,
      condition: "General Consultation",
      rating: 5,
      text: "I appreciate Dr. Mitchell's thorough approach to healthcare. She doesn't just treat symptoms but looks at the whole picture. Her preventive care recommendations have kept me healthier than ever.",
      image: "https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&w=150"
    }
  ];

  return (
    <section id="testimonials" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">
            What Our <span className="text-sky-600">Patients</span> <span className="text-teal-600">Say</span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            <span className="text-sky-600 font-semibold">Real stories</span> from <span className="text-teal-600 font-semibold">real patients</span> who have experienced the difference 
            that <span className="text-sky-600 font-semibold">compassionate, comprehensive healthcare</span> can make.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <div 
              key={index}
              className="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1"
            >
              <div className="flex items-center justify-between mb-4">
                <Quote className="w-8 h-8 text-sky-300" />
                <div className="flex space-x-1">
                  {[...Array(testimonial.rating)].map((_, i) => (
                    <Star key={i} className="w-5 h-5 text-yellow-400 fill-current" />
                  ))}
                </div>
              </div>
              
              <p className="text-gray-700 mb-6 leading-relaxed italic">
                "{testimonial.text}"
              </p>
              
              <div className="flex items-center space-x-4">
                <img 
                  src={testimonial.image} 
                  alt={testimonial.name}
                  className="w-12 h-12 rounded-full object-cover"
                />
                <div>
                  <h4 className="font-semibold text-gray-900">{testimonial.name}</h4>
                  <p className="text-sm text-gray-600">Age {testimonial.age} • {testimonial.condition}</p>
                </div>
              </div>
            </div>
          ))}
        </div>

        <div className="text-center mt-12">
          <div className="bg-white rounded-2xl p-8 shadow-lg max-w-4xl mx-auto">
            <h3 className="text-2xl font-bold text-gray-900 mb-4">
              Join Our <span className="text-sky-600">Family</span> of <span className="text-teal-600">Satisfied Patients</span>
            </h3>
            <p className="text-gray-600 mb-6">
              Experience the difference that <span className="text-sky-600 font-semibold">personalized, compassionate healthcare</span> can make. 
              <span className="text-teal-600 font-semibold">Schedule your consultation today</span> and take the first step towards <span className="text-sky-600 font-semibold">better health</span>.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <button className="bg-sky-500 text-white px-8 py-3 rounded-lg font-semibold hover:bg-sky-600 transition-colors">
                <span className="font-bold">Schedule Consultation</span>
              </button>
              <button className="border-2 border-sky-500 text-sky-600 px-8 py-3 rounded-lg font-semibold hover:bg-sky-50 transition-colors">
                <span className="font-bold">Learn More About Our Services</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonials;