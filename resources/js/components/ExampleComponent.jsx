import React from 'react';

const ExampleComponent = () => {
    return (
        <div style={{
            padding: '20px',
            margin: '20px 0',
            backgroundColor: '#EAF8F8',
            borderRadius: '12px',
            border: '1px solid rgba(0, 128, 128, 0.12)',
            textAlign: 'center',
            boxShadow: '0 4px 6px rgba(0, 128, 128, 0.05)'
        }}>
            <h3 style={{ color: '#008080', fontWeight: 'bold', margin: '0 0 10px 0' }}>
                👋 Halo dari React!
            </h3>
            <p style={{ color: '#667575', margin: 0 }}>
                Komponen ini dirender menggunakan React di dalam Blade template Anda.
            </p>
        </div>
    );
};

export default ExampleComponent;
