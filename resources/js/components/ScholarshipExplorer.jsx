import React, { useState } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { Search, MapPin, Users, GraduationCap, ChevronRight } from 'lucide-react';

const ScholarshipExplorer = ({ initialScholarships = [] }) => {
    const [searchTerm, setSearchTerm] = useState('');

    const filteredScholarships = initialScholarships.filter(s => 
        s.name.toLowerCase().includes(searchTerm.toLowerCase()) || 
        s.description.toLowerCase().includes(searchTerm.toLowerCase())
    );

    return (
        <div className="react-scholarship-explorer">
            <div className="text-center mb-5">
                <span className="section-subtitle">Program Beasiswa</span>
                <h2 className="section-title">Pilih Program Beasiswa</h2>
                <p className="hero-text mx-auto" style={{ maxWidth: '600px' }}>
                    Temukan program beasiswa yang sesuai dengan kemampuan dan kebutuhanmu.
                </p>

                {/* Search Bar */}
                <div style={{ maxWidth: '500px', margin: '30px auto', position: 'relative' }}>
                    <div style={{
                        position: 'absolute',
                        left: '20px',
                        top: '50%',
                        transform: 'translateY(-50%)',
                        color: '#008080'
                    }}>
                        <Search size={20} />
                    </div>
                    <input 
                        type="text" 
                        placeholder="Cari beasiswa impianmu..." 
                        value={searchTerm}
                        onChange={(e) => setSearchTerm(e.target.value)}
                        style={{
                            width: '100%',
                            padding: '16px 20px 16px 50px',
                            borderRadius: '100px',
                            border: '2px solid rgba(0, 128, 128, 0.1)',
                            fontSize: '16px',
                            boxShadow: '0 10px 30px rgba(0, 43, 43, 0.05)',
                            outline: 'none',
                            transition: 'all 0.3s ease'
                        }}
                        onFocus={(e) => e.target.style.borderColor = '#008080'}
                        onBlur={(e) => e.target.style.borderColor = 'rgba(0, 128, 128, 0.1)'}
                    />
                </div>
            </div>

            {/* Grid Beasiswa */}
            <div className="row g-4">
                <AnimatePresence>
                    {filteredScholarships.length > 0 ? (
                        filteredScholarships.map((scholarship) => (
                            <motion.div 
                                key={scholarship.id}
                                className="col-lg-4"
                                layout
                                initial={{ opacity: 0, scale: 0.9, y: 20 }}
                                animate={{ opacity: 1, scale: 1, y: 0 }}
                                exit={{ opacity: 0, scale: 0.9, y: 20 }}
                                transition={{ duration: 0.3 }}
                            >
                                <div className="category-card text-center h-100 d-flex flex-column justify-content-between" style={{
                                    background: '#FFFFFF',
                                    padding: '40px 30px',
                                    borderRadius: '24px',
                                    border: '1px solid rgba(0, 128, 128, 0.05)',
                                    boxShadow: '0 10px 30px rgba(0, 43, 43, 0.03)',
                                    transition: 'all 0.3s ease',
                                    position: 'relative',
                                    overflow: 'hidden',
                                    cursor: 'pointer'
                                }}
                                onMouseEnter={(e) => {
                                    e.currentTarget.style.transform = 'translateY(-6px)';
                                    e.currentTarget.style.boxShadow = '0 15px 35px rgba(0, 43, 43, 0.08)';
                                    e.currentTarget.style.borderColor = 'rgba(0, 128, 128, 0.15)';
                                }}
                                onMouseLeave={(e) => {
                                    e.currentTarget.style.transform = 'translateY(0)';
                                    e.currentTarget.style.boxShadow = '0 10px 30px rgba(0, 43, 43, 0.03)';
                                    e.currentTarget.style.borderColor = 'rgba(0, 128, 128, 0.05)';
                                }}
                                >
                                    <div>
                                        <div className="icon-circle mx-auto" style={{
                                            width: '70px',
                                            height: '70px',
                                            borderRadius: '50%',
                                            background: 'linear-gradient(135deg, rgba(0, 128, 128, 0.05), rgba(43, 196, 196, 0.05))',
                                            display: 'inline-flex',
                                            alignItems: 'center',
                                            justifyContent: 'center',
                                            marginBottom: '24px',
                                            color: '#008080',
                                            transition: 'all 0.3s ease'
                                        }}>
                                            <GraduationCap size={30} />
                                        </div>

                                        <h3 className="fw-bold mt-2 mb-3" style={{ fontSize: '22px', color: '#002B2B' }}>
                                            {scholarship.name}
                                        </h3>

                                        <p className="text-muted mb-4" style={{ fontSize: '15px', lineHeight: '1.6' }}>
                                            {scholarship.description}
                                        </p>
                                    </div>

                                    <div>
                                        <div className="mb-4">
                                            <span className="badge rounded-pill bg-light px-3 py-2 border border-light" style={{ color: '#008080', fontWeight: '600', fontSize: '13px' }}>
                                                <Users size={14} style={{ display: 'inline', marginRight: '5px', marginBottom: '2px' }} />
                                                Kuota: {scholarship.quota} orang
                                            </span>
                                        </div>
                                        <a href={`/applications/create`} className="btn btn-outline-main w-100" style={{
                                            border: '2px solid #008080',
                                            padding: '12px 32px',
                                            borderRadius: '100px',
                                            fontWeight: '600',
                                            textDecoration: 'none',
                                            color: '#008080',
                                            transition: 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)'
                                        }}>
                                            Daftar Sekarang <ChevronRight size={16} />
                                        </a>
                                    </div>
                                </div>
                            </motion.div>
                        ))
                    ) : (
                        <motion.div 
                            className="col-12 text-center"
                            initial={{ opacity: 0 }}
                            animate={{ opacity: 1 }}
                        >
                            <div style={{ padding: '40px', background: 'rgba(0,128,128,0.03)', borderRadius: '24px' }}>
                                <Search size={40} color="#008080" style={{ opacity: 0.5, marginBottom: '20px' }} />
                                <h4>Program beasiswa tidak ditemukan</h4>
                                <p className="text-muted">Coba gunakan kata kunci pencarian yang lain.</p>
                            </div>
                        </motion.div>
                    )}
                </AnimatePresence>
            </div>
        </div>
    );
};

export default ScholarshipExplorer;
