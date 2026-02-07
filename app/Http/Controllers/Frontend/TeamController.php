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
            'dicky-tahapary' => [
                'name' => 'dr. Dicky L. Tahapary SpPD-KEMD, PhD',
                'title' => 'Kepala Instalasi Clinical Research Unit',
                'bio' => 'Leading CRU RSCM\'s precision medicine initiatives with focus on metabolic disease research and genomic studies. Over 15 years of experience in endocrinology and metabolic disorders.',
                'image' => asset('frontend/images/team/dr-dicky.png'),
            ],

            'dr-selvi-nafisa-shahab-spmk' => [
                'name' => 'Dr. Selvi Nafisa Shahab, Sp.MK',
                'title' => 'Head of Genomic Laboratory (Clinical Research Unit)',
                'subtitle' => 'Clinical Microbiologist, PhD Candidate',
                'bio' => 'A clinical microbiologist and PhD candidate with a strong background in bacterial genomics and antimicrobial resistance, currently serving as the head of a genomics laboratory. Equipped with hands-on experience in routine next-generation sequencing for human and pathogen applications, genomic data interpretation and the integration of the sequencing results into clinical diagnostics, outbreak investigations and public health surveillance, with a strong commitment to advancing infectious disease diagnostics and genomic services.',
                'image' => asset('frontend/images/team/dr-selvi-nafisa-shahab-spmk.png'),
                'personal_info' => [
                    'phone' => '62.857.7056.4595',
                    'email' => 'selvishahab@rscm.co.id',
                    'location' => 'Jakarta, Indonesia',
                    'nationality' => 'Indonesian',
                    'languages' => 'Indonesian (Native), English (C1/Advanced)',
                    'speciality' => 'Clinical Microbiology & Genomics',
                ],
                'education' => [
                    [
                        'degree' => 'PhD',
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
                    'phone' => '622147881773 / 628551140441',
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
        ];
    }
}
