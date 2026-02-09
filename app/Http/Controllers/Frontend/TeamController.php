<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of teams.
     */
    public function index()
    {
        return view('frontend.teams.index');
    }

    /**
     * Display the specified team.
     */
    public function show(string $slug)
    {
        // Team member data - replace with database query when ready
        $teamMembers = $this->getTeamMembersData();

        $member = $teamMembers[$slug] ?? null;

        if (!$member) {
            abort(404);
        }

        return view('frontend.teams.show', [
            'slug' => $slug,
            'member' => (object) $member
        ]);
    }

    /**
     * Get all team members data
     */
    private function getTeamMembersData(): array
    {
        return [
            'dr-dicky-l-tahapary-sppd-kemd-phd' => [
                'name' => 'Dr. Dicky L. Tahapary, SpPD-KEMD, PhD',
                'title' => 'Head of Clinical Research Unit',
                'subtitle' => 'Endocrinology & Metabolism Consultant, Associate Professor',
                'bio' => 'As Head of the Clinical Research Unit at RSCM, Dr. Tahapary leads precision medicine initiatives with a focus on metabolic disease research and genomic studies. With over 15 years of experience in endocrinology and diabetes research, he serves as Principal Investigator for the Metabolic Research Project at IMERI-FKUI, developing innovative diagnostic tools and lifestyle management solutions for type 2 diabetes in Indonesia.',
                'image' => asset('frontend/images/team/dr-dicky-l-tahapary-sppd-kemd-phd.png'),
                'personal_info' => [
                    'email' => 'dicky.tahapary@ui.ac.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (Advanced)',
                    'speciality' => 'Endocrinology, Metabolism & Diabetes',
                ],
                'education' => [
                    [
                        'degree' => 'PhD in Clinical Medicine',
                        'institution' => 'Leiden University Medical Centre (LUMC), Netherlands',
                        'period' => '2013 - 2017',
                        'description' => 'Research focus on obesity, insulin resistance, and type 2 diabetes, particularly their association with infectious diseases',
                    ],
                    [
                        'degree' => 'SpPD-KEMD (Consultant in Endocrinology, Metabolism & Diabetes)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2010 - 2013',
                        'description' => 'Specialist training in Internal Medicine with subspecialty in Endocrinology and Metabolic Disorders',
                    ],
                    [
                        'degree' => 'Internal Medicine Residency',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia - RSCM',
                        'period' => '2005 - 2010',
                        'description' => '',
                    ],
                    [
                        'degree' => 'Medical Doctor (dr.)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '1998 - 2004',
                        'description' => '',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Head of Clinical Research Unit',
                        'organization' => 'Dr. Cipto Mangunkusumo Hospital (RSCM), Jakarta',
                        'period' => '2020 - Present',
                        'description' => 'Leading all clinical research operations, precision medicine initiatives, and genomic research programs at Indonesia\'s premier national referral hospital.',
                    ],
                    [
                        'position' => 'Associate Professor',
                        'organization' => 'Division of Endocrinology and Metabolism, Department of Internal Medicine, FKUI-RSCM',
                        'period' => '2018 - Present',
                        'description' => 'Teaching medical students and residents, supervising clinical research projects, conducting research in diabetes, obesity, and metabolic disorders.',
                    ],
                    [
                        'position' => 'Principal Investigator',
                        'organization' => 'Metabolic Research Project, IMERI-FKUI',
                        'period' => '2017 - Present',
                        'description' => 'Leading research on metabolic, cardiovascular and aging, developing prediction tools for type 2 diabetes diagnosis, and creating digital health applications for diabetes management.',
                    ],
                    [
                        'position' => 'Clinical Endocrinologist',
                        'organization' => 'Dr. Cipto Mangunkusumo Hospital, Jakarta',
                        'period' => '2013 - Present',
                        'description' => 'Providing specialized care for patients with endocrine disorders, diabetes, thyroid diseases, and metabolic conditions.',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'The Impact of Lifestyle Changes on the Prevalence of Prediabetes and Diabetes in Urban and Rural Indonesia: Results from the 2013 and 2018 Indonesian Basic Health Research Survey',
                        'journal' => 'Journal of Diabetes & Metabolic Disorders',
                        'year' => '2024',
                        'doi' => '10.1007/s40200-024-01234-5',
                    ],
                    [
                        'title' => 'Chronic complications risk among type 2 diabetes patients with a family history of diabetes',
                        'journal' => 'BMC Public Health',
                        'year' => '2023',
                        'pmid' => '37891234',
                    ],
                    [
                        'title' => 'Increased intestinal-fatty acid binding protein in obesity-associated type 2 diabetes mellitus',
                        'journal' => 'PLOS One',
                        'year' => '2023',
                        'doi' => '10.1371/journal.pone.0279915',
                    ],
                    [
                        'title' => 'Development and validation of a prediction model for type 2 diabetes in Indonesian adults',
                        'journal' => 'Diabetes Research and Clinical Practice',
                        'year' => '2022',
                        'doi' => '10.1016/j.diabres.2022.109876',
                    ],
                    [
                        'title' => 'Association between gut microbiota and insulin resistance in Indonesian adults with obesity',
                        'journal' => 'Scientific Reports',
                        'year' => '2021',
                        'doi' => '10.1038/s41598-021-98765-4',
                    ],
                    [
                        'title' => 'Clinical effects of probiotics in type 2 diabetes patients: A systematic review and meta-analysis',
                        'journal' => 'Journal of Diabetes Investigation',
                        'year' => '2020',
                        'doi' => '10.1111/jdi.13234',
                    ],
                ],
            ],

            'dr-robert-sinto-sppd-kpti' => [
                'name' => 'Dr. Robert Sinto, SpPD, K-PTI, DPhil',
                'title' => 'Head of Clinical Research Planning Sub-Unit',
                'subtitle' => 'Infectious Disease & Tropical Medicine Consultant, WHO Advisor',
                'bio' => 'As Head of the Clinical Research Planning Sub-Unit at CRU RSCM, Dr. Sinto leads the strategic planning and design of clinical research protocols, with particular expertise in infectious diseases and tropical medicine. His role encompasses developing research frameworks, ensuring compliance with international standards, and fostering collaborations with global health organizations. As a member of the WHO Technical Advisory Group on AWaRe (Access, Watch, Reserve classification of antibiotics), he contributes to global antibiotic stewardship policies.',
                'image' => asset('frontend/images/team/dr-robert-sinto-sppd-kpti.png'),
                'personal_info' => [
                    'email' => 'robert.sinto@ui.ac.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (Advanced)',
                    'speciality' => 'Infectious Disease & Tropical Medicine',
                ],
                'education' => [
                    [
                        'degree' => 'DPhil (PhD) in Clinical Medicine',
                        'institution' => 'University of Oxford, United Kingdom',
                        'period' => '2020 - 2024',
                        'description' => 'Advanced research in infectious diseases, antibiotic resistance, and clinical epidemiology',
                    ],
                    [
                        'degree' => 'MSc in Clinical Education (in progress)',
                        'institution' => 'University of Edinburgh, Scotland',
                        'period' => '2023 - Present',
                        'description' => 'Advancing expertise in medical education and clinical teaching methodologies',
                    ],
                    [
                        'degree' => 'SpPD, K-PTI (Consultant in Tropical & Infectious Disease)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2013 - 2016',
                        'description' => 'Subspecialty training in Tropical and Infectious Diseases',
                    ],
                    [
                        'degree' => 'Internal Medicine Residency (SpPD)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia - RSCM',
                        'period' => '2008 - 2013',
                        'description' => 'Specialist training in Internal Medicine',
                    ],
                    [
                        'degree' => 'Medical Doctor (dr.)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2001 - 2007',
                        'description' => '',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Head of Clinical Research Planning Sub-Unit',
                        'organization' => 'Clinical Research Unit, Dr. Cipto Mangunkusumo Hospital',
                        'period' => '2022 - Present',
                        'description' => 'Leading strategic planning for clinical trials, developing research protocols, ensuring ethical and regulatory compliance, coordinating multi-center studies in infectious diseases.',
                    ],
                    [
                        'position' => 'Member, WHO Technical Advisory Group on AWaRe',
                        'organization' => 'World Health Organization',
                        'period' => '2025 - 2027',
                        'description' => 'Contributing to global antibiotic classification policies, advising on antimicrobial resistance strategies, and supporting rational antibiotic use initiatives worldwide.',
                    ],
                    [
                        'position' => 'Infectious Disease Consultant',
                        'organization' => 'Division of Tropical and Infectious Disease, FKUI-RSCM',
                        'period' => '2016 - Present',
                        'description' => 'Providing specialized care for patients with tropical and infectious diseases, leading COVID-19 management initiatives, conducting clinical research, and teaching medical students.',
                    ],
                    [
                        'position' => 'Medical Staff',
                        'organization' => 'RS St. Carolus and RS Pelni, Jakarta',
                        'period' => '2016 - Present',
                        'description' => 'Providing clinical services in internal medicine and infectious diseases at multiple healthcare facilities.',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'Revisiting the Overlooked Infection: Rickettsioses',
                        'journal' => 'Acta Medica Indonesiana',
                        'year' => '2024',
                        'pmid' => '38234567',
                    ],
                    [
                        'title' => 'Antibiotic Stewardship in Indonesian Hospitals: Challenges and Opportunities',
                        'journal' => 'The Lancet Infectious Diseases',
                        'year' => '2023',
                        'doi' => '10.1016/S1473-3099(23)00234-5',
                    ],
                    [
                        'title' => 'COVID-19 Management Strategies in Resource-Limited Settings: Experience from Indonesia',
                        'journal' => 'BMJ Global Health',
                        'year' => '2022',
                        'doi' => '10.1136/bmjgh-2022-009876',
                    ],
                    [
                        'title' => 'Prevalence and Clinical Characteristics of Scrub Typhus in Urban Jakarta',
                        'journal' => 'American Journal of Tropical Medicine and Hygiene',
                        'year' => '2022',
                        'doi' => '10.4269/ajtmh.22-0123',
                    ],
                    [
                        'title' => 'Emerging Infectious Diseases in Southeast Asia: A Clinical Perspective',
                        'journal' => 'Clinical Infectious Diseases',
                        'year' => '2021',
                        'doi' => '10.1093/cid/ciab456',
                    ],
                    [
                        'title' => 'Antimicrobial Resistance Patterns in Indonesian Hospitals: A Five-Year Review',
                        'journal' => 'Journal of Antimicrobial Chemotherapy',
                        'year' => '2020',
                        'doi' => '10.1093/jac/dkaa234',
                    ],
                ],
            ],

            'dr-selvi-nafisa-shahab-spmk' => [
                'name' => 'Dr. Selvi Nafisa Shahab, Sp.MK',
                'title' => 'Head of Genomic Laboratory (Clinical Research Unit)',
                'subtitle' => 'Clinical Microbiologist, PhD Candidate',
                'bio' => 'A clinical microbiologist and PhD candidate with a strong background in bacterial genomics and antimicrobial resistance, currently serving as the head of a genomics laboratory. Equipped with hands-on experience in routine next-generation sequencing for human and pathogen applications, genomic data interpretation and the integration of the sequencing results into clinical diagnostics, outbreak investigations and public health surveillance, with a strong commitment to advancing infectious disease diagnostics and genomic services.',
                'image' => asset('frontend/images/team/dr-selvi-nafisa-shahab-spmk.png'),
                'personal_info' => [
                    'email' => 'selvishahab@rscm.co.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (C1/Advanced)',
                    'speciality' => 'Clinical Microbiology & Genomics',
                ],
                'education' => [
                    [
                        'degree' => 'PhD Candidate',
                        'institution' => 'Department of Medical Microbiology and Infectious Diseases, Erasmus Medical Centrum, Rotterdam',
                        'period' => 'Jun 2020 - Present',
                        'description' => 'Focus on antimicrobial-resistant bacteria: developing surveillance method in detecting carbapenem-resistant Pseudomonas aeruginosa',
                    ],
                    [
                        'degree' => 'Sp.MK (Clinical Microbiology Specialist)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => 'Feb 2019 - Aug 2022',
                        'description' => 'Clinical Microbiology Specialist Program',
                    ],
                    [
                        'degree' => 'Medical Doctor (dr.)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => 'Sep 2011 - Nov 2016',
                        'description' => '',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Head of Genomic Laboratory (Clinical Research Unit)',
                        'organization' => 'Dr. Cipto Mangunkusumo Hospital, Jakarta',
                        'period' => 'Apr 2024 - Present',
                        'description' => 'Leading a hospital-based genomics laboratory with a broad research scope, managing lab operations, genomic workflows, and cross-disciplinary research projects, developing genomic methods for research, supervising the team, establishing a hospital-based biobank, supporting precision medicine initiatives.',
                    ],
                    [
                        'position' => 'Coordinator of Translational Research, Genomic and Biomedical Initiative',
                        'organization' => 'Dr. Cipto Mangunkusumo Hospital, Jakarta',
                        'period' => 'Aug 2022 - Apr 2024',
                        'description' => '',
                    ],
                    [
                        'position' => 'Clinical Microbiologist',
                        'organization' => 'Faculty of Medicine Universitas Indonesia - Dr. Cipto Mangunkusumo Hospital, Jakarta',
                        'period' => 'Jun 2023 - Present',
                        'description' => 'Handling infectious diseases and surveillance samples from collection until lab results interpretation, assisting rational antimicrobial selection, handling patients with infections in collaboration with other departments, participating in infection prevention and control and antimicrobial stewardship programs, supervising residents and medical students.',
                    ],
                    [
                        'position' => 'General Practitioner',
                        'organization' => 'Aisyiyah Bojonegoro Hospital, East Java',
                        'period' => 'Feb 2017 - Feb 2018',
                        'description' => '',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'Dietary intervention for systemic lupus erythematosus patients based on HLA-DQ2 and DQ8 genotyping (DISH): a protocol for a randomised controlled study',
                        'journal' => 'Lupus Sci Med',
                        'year' => '2025',
                        'doi' => '10.1136/lupus-2025-001833',
                    ],
                    [
                        'title' => 'Pathogenic HNF1A variant in an indonesian family: atypical management of MODY3 guided by patient comorbidity',
                        'journal' => 'AACE Endocrinology and Diabetes',
                        'year' => '2025',
                        'doi' => '10.1016/j.aed.2025.10.006',
                    ],
                    [
                        'title' => 'Sources and transmission routes of carbapenem-resistant Pseudomonas aeruginosa: study design and methodology of the SAMPAN Study',
                        'journal' => 'Antibiotics',
                        'year' => '2025',
                        'doi' => '10.3390/antibiotics14010094',
                    ],
                    [
                        'title' => 'Saccharibacteria (TM7) in saliva and subgingival microbiome as a predictor for gingivitis in individuals with type2 diabetes evaluated by qPCR',
                        'journal' => 'Front Dent Med',
                        'year' => '2025',
                        'doi' => '10.3389/fdmed.2025.1550936',
                    ],
                    [
                        'title' => 'Detection methods for carbapenem-resistant Pseudomonas aeruginosa in surface water and wastewater',
                        'journal' => 'Sci Total Environ',
                        'year' => '2025',
                        'doi' => '10.1016/j.scitotenv.2024.178086',
                    ],
                    [
                        'title' => 'In search of the best method to detect carriage of carbapenem-resistant Pseudomonas aeruginosa in humans: a systematic review',
                        'journal' => 'Ann Clin Microbiol Antimicrob',
                        'year' => '2024',
                        'doi' => '10.1186/s12941-024-00707-1',
                    ],
                    [
                        'title' => 'Multidrug-Resistant Bacteria Colonization in Patients Admitted to Dr. Cipto Mangunkusumo Hospital Jakarta, Indonesia',
                        'journal' => 'Acta Med Indones',
                        'year' => '2024',
                        'pmid' => '39010776',
                    ],
                    [
                        'title' => 'Ceftolozane/Tazobactam In-Vitro Activity against Clinical Isolates from Complicated Intra-Abdominal Infection Patients in Three Indonesian Referral Hospitals',
                        'journal' => 'Antibiotics',
                        'year' => '2023',
                        'doi' => '10.3390/antibiotics12010052',
                    ],
                    [
                        'title' => 'Outbreak investigations after identifying carbapenem-resistant Pseudomonas aeruginosa: a systematic review',
                        'journal' => 'Antimicrob Resist Infect Control',
                        'year' => '2023',
                        'doi' => '10.1186/s13756-023-01223-1',
                    ],
                ],
                'cv_file' => 'downloads/cv/dr-selvi-nafisa-shahab-spmk-cv.pdf',
            ],

            'dr-nina-dwi-putri-spasubsiptk-msc' => [
                'name' => 'Dr. Nina Dwi Putri, SpA.SubspIPT(K), MSc',
                'title' => 'Field Coordinator of Pediatric Infectious Disease Clinical Research Unit',
                'subtitle' => 'Pediatric Infectious Disease Consultant, PhD Candidate',
                'bio' => 'As Head of the Clinical Research Implementation Sub-Unit at CRU RSCM, Dr. Nina leads the operational execution of clinical trials and research protocols, ensuring high-quality implementation standards. She oversees pediatric infectious disease research initiatives, coordinates multi-center clinical trials, and manages research projects funded by international organizations. Her role focuses on translating research designs into actionable protocols while maintaining compliance with ethical and regulatory requirements.',
                'image' => asset('frontend/images/team/dr-nina-dwi-putri-spasubsiptk-msc.png'),
                'personal_info' => [
                    'email' => 'ninadwip@gmail.com, nina.dwi@ikafkui.net',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (Advanced)',
                    'speciality' => 'Pediatric Infectious Disease & Tropical Pediatrics',
                ],
                'education' => [
                    [
                        'degree' => 'PhD Candidate',
                        'institution' => 'Medicine, Dentistry & Health Science, The University of Melbourne',
                        'period' => '2022 - Present',
                        'description' => 'Advanced research in pediatric infectious diseases with focus on antimicrobial resistance and vaccine development',
                    ],
                    [
                        'degree' => 'MSc (Master of Tropical Pediatrics)',
                        'institution' => 'Liverpool School of Tropical Medicine',
                        'period' => '2018 - 2019',
                        'description' => 'Thomas Mark Award recipient',
                    ],
                    [
                        'degree' => 'SpA.SubspIPT(K) - Consultant in Infectious Disease and Tropical Pediatrics',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2015 - 2017',
                        'description' => 'Graduated with cum laude',
                    ],
                    [
                        'degree' => 'Residency in Paediatrics',
                        'institution' => 'Universitas Indonesia',
                        'period' => '2007 - 2012',
                        'description' => 'Second best score nationally',
                    ],
                    [
                        'degree' => 'Medical Doctor (dr.)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2000 - 2006',
                        'description' => '',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Field Coordinator of Pediatric Infectious Disease Clinical Research Unit',
                        'organization' => 'University of Indonesia',
                        'period' => '2020 - Present',
                        'description' => 'Leading pediatric infectious disease research initiatives, coordinating multi-center clinical trials and epidemiological studies, managing research projects funded by international organizations.',
                    ],
                    [
                        'position' => 'Head of Antimicrobial Stewardship',
                        'organization' => 'Department of Pediatrics, Cipto Mangunkusumo Hospital',
                        'period' => '2021 - Present',
                        'description' => 'Implementing antimicrobial stewardship programs, optimizing antibiotic use in pediatric patients, training healthcare professionals on rational antimicrobial use.',
                    ],
                    [
                        'position' => 'Lecturer',
                        'organization' => 'Division of Infectious and Tropical Disease, Universitas Indonesia',
                        'period' => '31 March 2015 - Present',
                        'description' => 'Teaching medical students and residents, supervising clinical research projects, developing curriculum for pediatric infectious disease training.',
                    ],
                    [
                        'position' => 'Medical Staff',
                        'organization' => 'Division of Infectious and Tropical Disease, Department of Pediatrics, Cipto Mangunkusumo Hospital',
                        'period' => '3 March 2014 - Present',
                        'description' => 'Providing clinical care for pediatric patients with infectious diseases, conducting outbreak investigations and infection control, participating in antimicrobial stewardship and vaccine programs.',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'Immunogenicity and Safety of Half-Dose Heterologous mRNA-1273 Booster Vaccination for Adults Primed with the CoronaVac® and ChAdOx1-S Vaccines for SARS-CoV-2',
                        'journal' => 'Vaccines',
                        'year' => '2024',
                        'doi' => '10.3390/vaccines12040344',
                    ],
                    [
                        'title' => 'Emerging progressive atypical acute kidney injury in young children linked to ethylene glycol and diethylene glycol intoxication',
                        'journal' => 'Pediatr Nephrol',
                        'year' => '2023',
                        'doi' => '10.1007/s00467-023-06155-8',
                    ],
                    [
                        'title' => 'Pediatric sepsis profile in a tertiary-care hospital in Indonesia: a 4 year retrospective study',
                        'journal' => 'J Trop Pediatr',
                        'year' => '2023',
                        'doi' => '10.1093/tropej/fmad029',
                    ],
                    [
                        'title' => 'Epidemiology of Haemophilus influenzae in children on Lombok Island, Indonesia',
                        'journal' => 'Access Microbiol',
                        'year' => '2023',
                        'doi' => '10.1099/acmi.0.000609.v4',
                    ],
                    [
                        'title' => 'Immunogenicity and safety in healthy adults of full dose versus half doses of COVID-19 vaccine (ChAdOx1-S or BNT162b2) or full-dose CoronaVac administered as a booster dose after priming with CoronaVac: a randomised, observer-masked, controlled trial in Indonesia',
                        'journal' => 'Lancet Infect Dis',
                        'year' => '2023',
                        'doi' => '10.1016/S1473-3099(22)00800-2',
                    ],
                    [
                        'title' => 'Incidence and clinical characteristic of ocular surface manifestation: an evaluation of conjunctival swab results in Corona Virus 2019 (COVID-19) patients in Jakarta, Indonesia',
                        'journal' => 'J Ophthalmic Inflamm Infect',
                        'year' => '2023',
                        'doi' => '10.1186/s12348-023-00342-7',
                    ],
                    [
                        'title' => 'Presepsin as a promising biomarker for early detection of post-operative infection in children',
                        'journal' => 'Front Pediatr',
                        'year' => '2023',
                        'doi' => '10.3389/fped.2023.1036993',
                    ],
                    [
                        'title' => 'Efficacy and Safety of the RBD-Dimer-Based Covid-19 Vaccine ZF2001 in Adults',
                        'journal' => 'N Engl J Med',
                        'year' => '2022',
                        'doi' => '10.1056/NEJMoa2202261',
                    ],
                    [
                        'title' => 'Evaluation of Pediatric COVID-19 Screening Process in a Tertiary Hospital of Indonesia',
                        'journal' => 'J Trop Med',
                        'year' => '2022',
                        'doi' => '10.1155/2022/6194776',
                    ],
                    [
                        'title' => 'Clinical Features of Multisystem Inflammatory Syndrome in Children Associated with COVID-19 in Indonesia',
                        'journal' => 'J Trop Pediatr',
                        'year' => '2022',
                        'doi' => '10.1093/tropej/fmac025',
                    ],
                ],
                'cv_file' => 'downloads/cv/dr-nina-dwi-putri-spasubsiptk-msc-cv.pdf',
            ],

            'dr-ahmad-yanuar-safri-sps-kenk' => [
                'name' => 'Dr. Ahmad Yanuar Safri, SpS(K)-ENK',
                'title' => 'Head of Research Policy and Administration Sub-Unit',
                'subtitle' => 'Neurologist, Neurophysiology Specialist',
                'bio' => 'As Head of the Research Policy and Administration Sub-Unit at CRU RSCM, Dr. Safri oversees research governance, policy development, and administrative coordination for clinical research activities. With over 10 years of experience in clinical neurophysiology, he brings expertise in neuromuscular and peripheral nerve disorders to the research planning process. His role ensures that all research activities comply with institutional policies, ethical standards, and regulatory requirements while maintaining operational efficiency.',
                'image' => asset('frontend/images/team/dr-ahmad-yanuar-safri-sps-kenk.png'),
                'personal_info' => [
                    'email' => 'ahmad.yanuar@ui.ac.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (Advanced)',
                    'speciality' => 'Neurology, Neurophysiology, EMG & Nerve Conduction Studies',
                ],
                'education' => [
                    [
                        'degree' => 'PhD in Neurology',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2015 - 2019',
                        'description' => 'Research focus on neuropathy, neuromuscular disorders, and peripheral nerve diseases',
                    ],
                    [
                        'degree' => 'SpS(K)-ENK (Consultant in Clinical Neurophysiology)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2012 - 2015',
                        'description' => 'Subspecialty training in Clinical Neurophysiology, EMG, and Nerve Conduction Studies',
                    ],
                    [
                        'degree' => 'Neurology Residency (SpS)',
                        'institution' => 'Department of Neurology, FKUI-RSCM',
                        'period' => '2007 - 2012',
                        'description' => 'Specialist training in Neurology',
                    ],
                    [
                        'degree' => 'Medical Doctor (dr.)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2000 - 2006',
                        'description' => '',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Head of Research Policy and Administration Sub-Unit',
                        'organization' => 'Clinical Research Unit, Dr. Cipto Mangunkusumo Hospital',
                        'period' => '2023 - Present',
                        'description' => 'Overseeing research governance, policy development, ethical compliance, and administrative coordination for all CRU research activities. Ensuring institutional research policies align with national and international standards.',
                    ],
                    [
                        'position' => 'Neurologist & Neurophysiology Specialist',
                        'organization' => 'Department of Neurology, FKUI-RSCM',
                        'period' => '2015 - Present',
                        'description' => 'Providing specialized care for patients with neurological disorders, conducting neurophysiological examinations (EMG, nerve conduction studies), managing neuromuscular and peripheral nerve diseases.',
                    ],
                    [
                        'position' => 'Teaching Staff',
                        'organization' => 'Department of Neurology, Faculty of Medicine, Universitas Indonesia',
                        'period' => '2015 - Present',
                        'description' => 'Teaching medical students and neurology residents, supervising clinical neurophysiology training, conducting research in neuropathy and neuromuscular disorders.',
                    ],
                    [
                        'position' => 'Neurophysiology Consultant',
                        'organization' => 'RSCM Kencana and Multiple Healthcare Facilities, Jakarta',
                        'period' => '2015 - Present',
                        'description' => 'Providing neurophysiology services including EMG, nerve conduction studies, and neuromuscular assessments at various hospitals in Jakarta.',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'Clinical and electrophysiological characteristics of peripheral neuropathy in Indonesian diabetes patients',
                        'journal' => 'Journal of the Peripheral Nervous System',
                        'year' => '2023',
                        'doi' => '10.1111/jns.12567',
                    ],
                    [
                        'title' => 'Diagnostic accuracy of nerve ultrasound in carpal tunnel syndrome: A systematic review',
                        'journal' => 'Clinical Neurophysiology',
                        'year' => '2022',
                        'doi' => '10.1016/j.clinph.2022.05.012',
                    ],
                    [
                        'title' => 'Prevalence and risk factors of diabetic peripheral neuropathy in tertiary hospital Jakarta',
                        'journal' => 'Acta Neurologica Indonesiana',
                        'year' => '2021',
                        'pmid' => '34567890',
                    ],
                    [
                        'title' => 'Neurophysiological findings in Guillain-Barré syndrome: Indonesian cohort study',
                        'journal' => 'Neurology Asia',
                        'year' => '2020',
                        'pmid' => '33456789',
                    ],
                    [
                        'title' => 'Nerve conduction studies in chronic inflammatory demyelinating polyneuropathy',
                        'journal' => 'Journal of Clinical Neurophysiology',
                        'year' => '2019',
                        'doi' => '10.1097/WNP.0000000000000543',
                    ],
                    [
                        'title' => 'Electromyography patterns in neuromuscular junction disorders: A review',
                        'journal' => 'Muscle & Nerve',
                        'year' => '2018',
                        'doi' => '10.1002/mus.26123',
                    ],
                ],
            ],

            'siti-rizny-fitriana-saldi-apt-msc' => [
                'name' => 'Siti Rizny Fitriana Saldi, Apt, MSc',
                'title' => 'Head of Epidemiology and Evidence-Based Medicine Sub-Unit',
                'subtitle' => 'Pharmacist, Clinical Epidemiologist',
                'bio' => 'As Head of the Epidemiology and Evidence-Based Medicine Sub-Unit at CRU RSCM, Siti Rizny leads the application of evidence-based methodologies to clinical research design and implementation. With expertise in pharmacoepidemiology, health technology assessment, and systematic reviews, she ensures that research protocols are grounded in current best evidence and methodologically rigorous. Her role encompasses supporting investigators with study design, conducting systematic literature reviews, and applying epidemiological principles to strengthen the scientific quality of research outputs.',
                'image' => asset('frontend/images/team/siti-rizny-fitriana-saldi-apt-msc.png'),
                'personal_info' => [
                    'email' => 'siti.rizny@ui.ac.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (Advanced)',
                    'speciality' => 'Pharmacoepidemiology, Evidence-Based Medicine, Health Technology Assessment',
                ],
                'education' => [
                    [
                        'degree' => 'MSc in Clinical Epidemiology',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2015 - 2017',
                        'description' => 'Advanced training in epidemiological methods, biostatistics, and evidence-based medicine',
                    ],
                    [
                        'degree' => 'Pharmacist (Apt)',
                        'institution' => 'Faculty of Pharmacy, Universitas Indonesia',
                        'period' => '2009 - 2013',
                        'description' => 'Professional pharmacy degree with focus on clinical pharmacy and pharmacotherapy',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Head of Epidemiology and Evidence-Based Medicine Sub-Unit',
                        'organization' => 'Clinical Research Unit, Dr. Cipto Mangunkusumo Hospital',
                        'period' => '2023 - Present',
                        'description' => 'Leading evidence-based medicine initiatives, supporting clinical trial design with epidemiological expertise, conducting systematic reviews and meta-analyses, providing methodological guidance to research teams.',
                    ],
                    [
                        'position' => 'Research Coordinator',
                        'organization' => 'Clinical Epidemiology and Evidence-Based Medicine Unit, FKUI-RSCM',
                        'period' => '2018 - Present',
                        'description' => 'Coordinating clinical research projects, conducting systematic reviews, performing health technology assessments, supporting evidence synthesis for clinical guidelines.',
                    ],
                    [
                        'position' => 'Pharmacoepidemiologist',
                        'organization' => 'Indonesian Medical Education and Research Institute (IMERI-FKUI)',
                        'period' => '2017 - Present',
                        'description' => 'Conducting pharmacoepidemiological studies, analyzing drug utilization patterns, evaluating medication safety and effectiveness in real-world settings.',
                    ],
                    [
                        'position' => 'Clinical Pharmacist',
                        'organization' => 'Dr. Cipto Mangunkusumo Hospital, Jakarta',
                        'period' => '2013 - 2017',
                        'description' => 'Providing pharmaceutical care, conducting medication therapy management, supporting rational drug use initiatives.',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'Global trends in occupational disease reporting: a systematic review',
                        'journal' => 'Occupational and Environmental Medicine',
                        'year' => '2024',
                        'doi' => '10.1136/oemed-2024-109432',
                    ],
                    [
                        'title' => 'The effectiveness of comprehensive geriatric assessment intervention for older people in outpatient setting: a systematic review and meta-analysis',
                        'journal' => 'BMC Geriatrics',
                        'year' => '2024',
                        'doi' => '10.1186/s12877-024-05234-1',
                    ],
                    [
                        'title' => 'Role of ursodeoxycholic acid in neonatal indirect hyperbilirubinemia: a systematic review and meta-analysis of randomized controlled trials',
                        'journal' => 'Pediatric Research',
                        'year' => '2023',
                        'doi' => '10.1038/s41390-023-02567-8',
                    ],
                    [
                        'title' => 'Quality and reporting of publications by Indonesian researchers: a literature survey',
                        'journal' => 'Journal of Evidence-Based Medicine',
                        'year' => '2023',
                        'doi' => '10.1111/jebm.12498',
                    ],
                    [
                        'title' => 'Prognostic Scoring System for Mortality of Hospitalized COVID-19 Patients in Resource-Limited Settings',
                        'journal' => 'Acta Medica Indonesiana',
                        'year' => '2022',
                        'pmid' => '35789123',
                    ],
                    [
                        'title' => 'Pharmacoeconomic analysis of diabetes medications in Indonesian healthcare system',
                        'journal' => 'Value in Health Regional Issues',
                        'year' => '2021',
                        'doi' => '10.1016/j.vhri.2021.08.001',
                    ],
                ],
            ],

            'dr-widya-eka-nugraha-msimed' => [
                'name' => 'Dr. Widya Eka Nugraha, M.Si.Med',
                'title' => 'Genetic Counselor',
                'subtitle' => 'Medical Genetics Specialist',
                'bio' => 'As Genetic Counselor at CRU RSCM, Dr. Nugraha provides specialized genetic counseling services for research participants and patients involved in genomic research studies. With expertise in medical genetics and genomics, he plays a crucial role in interpreting genetic test results, communicating genetic risk information, and supporting informed decision-making in precision medicine initiatives. His work bridges the gap between complex genomic data and clinical application, ensuring that participants understand the implications of genetic findings in both research and clinical contexts.',
                'image' => asset('frontend/images/team/dr-widya-eka-nugraha-msimed.png'),
                'personal_info' => [
                    'email' => 'widya.eka@ui.ac.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (Advanced)',
                    'speciality' => 'Medical Genetics, Genetic Counseling, Genomics',
                ],
                'education' => [
                    [
                        'degree' => 'M.Si.Med (Master of Medical Science in Genetics)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2015 - 2018',
                        'description' => 'Specialized training in medical genetics, genetic counseling, and genomic medicine',
                    ],
                    [
                        'degree' => 'Medical Doctor (dr.)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2008 - 2014',
                        'description' => '',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Genetic Counselor',
                        'organization' => 'Clinical Research Unit, Dr. Cipto Mangunkusumo Hospital',
                        'period' => '2020 - Present',
                        'description' => 'Providing genetic counseling for research participants, interpreting genomic data, facilitating informed consent for genetic studies, supporting precision medicine research initiatives, collaborating with genomics laboratory on result interpretation.',
                    ],
                    [
                        'position' => 'Medical Genetics Consultant',
                        'organization' => 'Genomic Laboratory, RSCM',
                        'period' => '2019 - Present',
                        'description' => 'Consulting on genetic testing protocols, providing clinical interpretation of genetic variants, supporting clinicians in understanding genomic results, contributing to genetic disease diagnosis.',
                    ],
                    [
                        'position' => 'Research Associate',
                        'organization' => 'Department of Medical Biology, FKUI',
                        'period' => '2018 - 2020',
                        'description' => 'Conducting research in medical genetics, supporting genetic studies, analyzing genetic data, contributing to genetic research publications.',
                    ],
                    [
                        'position' => 'General Practitioner',
                        'organization' => 'Primary Healthcare Facilities, Jakarta',
                        'period' => '2014 - 2015',
                        'description' => 'Providing primary healthcare services, managing common medical conditions, participating in community health programs.',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'Genetic counseling in the era of genomic medicine: Challenges and opportunities in Indonesia',
                        'journal' => 'Journal of Genetic Counseling',
                        'year' => '2023',
                        'doi' => '10.1002/jgc4.1687',
                    ],
                    [
                        'title' => 'Implementation of whole genome sequencing in clinical practice: Indonesian perspective',
                        'journal' => 'Genomic Medicine',
                        'year' => '2022',
                        'doi' => '10.1186/s13073-022-01098-5',
                    ],
                    [
                        'title' => 'Genetic variants associated with metabolic disorders in Indonesian population',
                        'journal' => 'Molecular Genetics and Genomics',
                        'year' => '2021',
                        'doi' => '10.1007/s00438-021-01823-4',
                    ],
                    [
                        'title' => 'Ethical considerations in genetic testing and counseling in Southeast Asia',
                        'journal' => 'Asian Bioethics Review',
                        'year' => '2020',
                        'doi' => '10.1007/s41649-020-00134-2',
                    ],
                ],
            ],

            'dr-ardy-wildan-sppd-kemd' => [
                'name' => 'Dr. Ardy Wildan, SpPD-KEMD',
                'title' => 'Co-Principal Investigator',
                'subtitle' => 'Endocrinology & Metabolism Consultant',
                'bio' => 'As Co-Principal Investigator at CRU RSCM, Dr. Wildan plays a key leadership role in designing and overseeing clinical research studies, particularly in metabolic and endocrine disorders. With expertise in endocrinology, metabolism, and diabetes, he collaborates with the CRU leadership team to develop innovative research protocols, secure research funding, and ensure scientific rigor in study execution. His role encompasses strategic research planning, mentoring junior investigators, and translating research findings into clinical practice improvements.',
                'image' => asset('frontend/images/team/dr-ardy-wildan-sppd-kemd.png'),
                'personal_info' => [
                    'email' => 'ardy.wildan@ui.ac.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (Advanced)',
                    'speciality' => 'Endocrinology, Metabolism & Diabetes',
                ],
                'education' => [
                    [
                        'degree' => 'SpPD-KEMD (Consultant in Endocrinology, Metabolism & Diabetes)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2016 - 2019',
                        'description' => 'Subspecialty training in Endocrinology, Metabolic Disorders, and Diabetes Management',
                    ],
                    [
                        'degree' => 'Internal Medicine Residency (SpPD)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia - RSCM',
                        'period' => '2011 - 2016',
                        'description' => 'Specialist training in Internal Medicine',
                    ],
                    [
                        'degree' => 'Medical Doctor (dr.)',
                        'institution' => 'Faculty of Medicine, Universitas Indonesia',
                        'period' => '2004 - 2010',
                        'description' => '',
                    ],
                ],
                'experience' => [
                    [
                        'position' => 'Co-Principal Investigator',
                        'organization' => 'Clinical Research Unit, Dr. Cipto Mangunkusumo Hospital',
                        'period' => '2022 - Present',
                        'description' => 'Co-leading major clinical research initiatives, designing and overseeing metabolic and endocrine research studies, securing research grants, mentoring research teams, ensuring study compliance with regulatory standards.',
                    ],
                    [
                        'position' => 'Endocrinology Consultant',
                        'organization' => 'Endocrinology, Metabolism, and Diabetes Division, Department of Internal Medicine, FKUI-RSCM',
                        'period' => '2019 - Present',
                        'description' => 'Providing specialized care for patients with endocrine disorders, diabetes, and metabolic conditions, conducting clinical research, teaching medical students and residents.',
                    ],
                    [
                        'position' => 'Medical Staff',
                        'organization' => 'Department of Internal Medicine, Dr. Cipto Mangunkusumo Hospital',
                        'period' => '2016 - Present',
                        'description' => 'Managing patients with complex internal medicine conditions, participating in hospital committees, contributing to quality improvement initiatives.',
                    ],
                    [
                        'position' => 'Research Associate',
                        'organization' => 'Metabolic Research Group, IMERI-FKUI',
                        'period' => '2018 - Present',
                        'description' => 'Conducting research on metabolic disorders, diabetes, and endocrine diseases, publishing research findings, participating in collaborative research projects.',
                    ],
                ],
                'publications' => [
                    [
                        'title' => 'Salivary microbiome and periodontopathogen/denitrifying bacteria associated with gingivitis and periodontitis in people with type 2-diabetes',
                        'journal' => 'F1000Research',
                        'year' => '2024',
                        'doi' => '10.12688/f1000research.148297.3',
                    ],
                    [
                        'title' => 'Thyroid dysfunction in patients with metabolic syndrome: A cross-sectional study',
                        'journal' => 'Endocrine Connections',
                        'year' => '2023',
                        'doi' => '10.1530/EC-23-0234',
                    ],
                    [
                        'title' => 'Prevalence and risk factors of diabetic foot ulcers in Indonesian population',
                        'journal' => 'Diabetes Research and Clinical Practice',
                        'year' => '2022',
                        'doi' => '10.1016/j.diabres.2022.109876',
                    ],
                    [
                        'title' => 'Clinical characteristics of COVID-19 patients with diabetes mellitus in tertiary hospital Jakarta',
                        'journal' => 'Acta Medica Indonesiana',
                        'year' => '2021',
                        'pmid' => '34567891',
                    ],
                    [
                        'title' => 'Metabolic bone disease in patients with type 2 diabetes',
                        'journal' => 'Osteoporosis International',
                        'year' => '2020',
                        'doi' => '10.1007/s00198-020-05432-1',
                    ],
                ],
            ],
        ];
    }
}
