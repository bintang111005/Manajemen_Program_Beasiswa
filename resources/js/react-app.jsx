import React from 'react';
import { createRoot } from 'react-dom/client';
import ScholarshipExplorer from './components/ScholarshipExplorer';
import FAQ from './components/FAQ';

const explorerElement = document.getElementById('react-scholarship-explorer');
if (explorerElement) {
    const rawData = explorerElement.getAttribute('data-scholarships');
    const scholarships = rawData ? JSON.parse(rawData) : [];
    const root = createRoot(explorerElement);
    root.render(<ScholarshipExplorer initialScholarships={scholarships} />);
}

const faqElement = document.getElementById('react-faq');
if (faqElement) {
    const root = createRoot(faqElement);
    root.render(<FAQ />);
}
