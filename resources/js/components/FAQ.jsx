import React, { useState } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { ChevronDown } from 'lucide-react';

const faqData = [
    {
        question: "Bagaimana cara mendaftar beasiswa?",
        answer: "Anda dapat mendaftar dengan membuat akun terlebih dahulu melalui halaman Login Mahasiswa. Setelah masuk, lengkapi profil Anda, pilih program beasiswa yang tersedia, dan unggah dokumen yang dipersyaratkan."
    },
    {
        question: "Apakah saya bisa mendaftar lebih dari satu program?",
        answer: "Tidak, saat ini sistem membatasi satu mahasiswa hanya dapat mendaftar dan menerima satu program beasiswa aktif pada periode yang sama untuk memastikan pemerataan bantuan."
    },
    {
        question: "Dokumen apa saja yang perlu disiapkan?",
        answer: "Dokumen wajib bervariasi bergantung pada jenis beasiswa (Akademik/Non-Akademik). Umumnya meliputi Transkrip Nilai, KTP, KTM, dan dokumen pendukung lainnya (seperti Surat Keterangan Tidak Mampu atau Sertifikat Prestasi)."
    },
    {
        question: "Bagaimana saya tahu jika saya lolos seleksi?",
        answer: "Pengumuman hasil seleksi akan diinformasikan langsung melalui Dashboard Mahasiswa Anda di menu 'Pengumuman'. Status pendaftaran Anda juga akan berubah secara real-time."
    }
];

const FAQ = () => {
    const [activeIndex, setActiveIndex] = useState(null);

    const toggleAccordion = (index) => {
        setActiveIndex(activeIndex === index ? null : index);
    };

    return (
        <div style={{ maxWidth: '800px', margin: '0 auto', padding: '60px 0' }}>
            <div className="text-center mb-5">
                <span className="section-subtitle">FAQ</span>
                <h2 className="section-title">Pertanyaan Umum</h2>
            </div>
            
            <div style={{ display: 'flex', flexDirection: 'column', gap: '16px' }}>
                {faqData.map((item, index) => (
                    <div 
                        key={index}
                        style={{
                            background: '#FFFFFF',
                            borderRadius: '16px',
                            border: '1px solid rgba(0, 128, 128, 0.1)',
                            overflow: 'hidden',
                            boxShadow: '0 4px 15px rgba(0, 43, 43, 0.03)'
                        }}
                    >
                        <button 
                            onClick={() => toggleAccordion(index)}
                            style={{
                                width: '100%',
                                padding: '20px 24px',
                                display: 'flex',
                                justifyContent: 'space-between',
                                alignItems: 'center',
                                background: 'transparent',
                                border: 'none',
                                cursor: 'pointer',
                                textAlign: 'left',
                                color: '#002B2B',
                                fontWeight: '600',
                                fontSize: '16px'
                            }}
                        >
                            {item.question}
                            <motion.div
                                animate={{ rotate: activeIndex === index ? 180 : 0 }}
                                transition={{ duration: 0.3 }}
                                style={{ color: '#008080' }}
                            >
                                <ChevronDown size={20} />
                            </motion.div>
                        </button>
                        
                        <AnimatePresence>
                            {activeIndex === index && (
                                <motion.div
                                    initial={{ height: 0, opacity: 0 }}
                                    animate={{ height: 'auto', opacity: 1 }}
                                    exit={{ height: 0, opacity: 0 }}
                                    transition={{ duration: 0.3 }}
                                >
                                    <div style={{ 
                                        padding: '0 24px 24px 24px',
                                        color: '#667575',
                                        lineHeight: '1.6'
                                    }}>
                                        <div style={{
                                            width: '100%',
                                            height: '1px',
                                            background: 'rgba(0,128,128,0.1)',
                                            marginBottom: '16px'
                                        }}></div>
                                        {item.answer}
                                    </div>
                                </motion.div>
                            )}
                        </AnimatePresence>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default FAQ;
