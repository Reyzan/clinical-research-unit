<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberStaffSeeder extends Seeder
{
    /**
     * Seeds each Sub-Unit Head's "Meet the Team" roster, sourced from
     * "Data Pegawai CRU 2026". Several people in that source have no listed
     * role/bio — they're seeded with a generic "Staff" role and a blank
     * description rather than inventing content; CRU staff should fill
     * these in via the admin panel.
     */
    public function run(): void
    {
        $rosters = [
            'dr-ahmad-yanuar-safri-sps-kenk' => [
                ['name' => 'Anggraeny Saptamaya, S.K.M.', 'role' => 'Administrative Officer'],
                ['name' => 'Indra Aprilianto, A.Md', 'role' => 'Staff'],
                [
                    'name' => 'Kevin Fajar Fadhillah, SH',
                    'role' => 'Legal Analyst',
                    'description' => 'Kevin is a legal analyst with a strong passion for legal review and litigation support. He contributes to litigation processes by conducting comprehensive legal research and preparing detailed analytical reports that inform case strategies. He is responsible for reviewing legal documents to ensure accuracy and compliance with applicable laws and regulations, as well as assisting in the management of case files and organization of evidence to facilitate efficient case progression. He holds a Master of Laws in Business Law, which underpins his analytical approach and professional practice.',
                ],
                [
                    'name' => 'Miftakhul Nur Farida, S.K.M.',
                    'role' => 'Administrative Officer',
                    'description' => 'Farida is an administrative officer specializing in research administration. Her work focuses on managing research documentation and coordinating monitoring and evaluation activities, including patient tracking and HIS compliance monitoring, to ensure research is conducted in line with applicable regulations and standards.',
                ],
                [
                    'name' => 'Rana Hanina Afifah',
                    'role' => 'Finance Administrator',
                    'description' => 'Rana Hanina Afifah is a Finance Administrator with over 10 years of experience in healthcare administration and financial management. She provides administrative and financial support for research and training programs, ensuring effective coordination, accurate reporting, and compliance with institutional policies and regulatory requirements.',
                ],
            ],

            'dr-nina-dwi-putri-spasubsiptk-msc' => [
                [
                    'name' => 'Anastasia Beatrice Rachel Agatha Mogot, S.Kep., Ners.',
                    'role' => 'Study Nurse',
                    'description' => 'Anastasia is a study nurse at the Clinical Research Implementation Sub Unit, with experience in clinical trial support and patient care. Her responsibilities include subject screening, clinical monitoring, and the administration of investigational treatments in accordance with study protocols. With formal training in Good Clinical Practice and Clinical Research During Outbreaks, she contributes to the effective conduct of clinical trials, patient safety, and continuous healthcare quality improvement.',
                ],
                [
                    'name' => 'Marlis Dame Ida Hekta, S.Kep, Ners, M.Tr.A.P',
                    'role' => 'Administrative Officer',
                    'description' => 'Marlis is an administrative officer in clinical trials with a Master\'s degree in Public Administration. She focused on ensuring accurate documentation and efficient study coordination as well as managing trial documents and schedules to support seamless execution. She contributes to compliance, streamlined workflows, and the overall success of clinical research activities.',
                ],
                [
                    'name' => 'Ramiza Jihan Fadhilah, S.Farm., Apt',
                    'role' => 'Pharmacist',
                    'photo' => 'frontend/images/team/apt-ramiza-jihan-sfarm.png',
                    'description' => 'Jihan is a pharmacist with extensive experience in managing Investigational Products (IP) and facilitating clinical trial site activation. She is responsible for ensuring proper handling, storage, documentation, and accountability of IP in compliance with regulatory standards and Good Clinical Practice. In addition, she plays a key role as a facilitator in site activation processes, supporting sponsors and CROs in conducting feasibility assessments, coordinating regulatory document preparation, and ensuring timely site readiness. She actively collaborates with cross-functional teams to streamline study start-up activities, enabling efficient and compliant clinical trial execution.',
                ],
                [
                    'name' => 'Siska Amalia Rachmah, AMK',
                    'role' => 'Study Nurse',
                    'description' => 'Siska is a dedicated and experienced nursing professional with decades of clinical experience in pediatric, maternity, and oncology care settings, complemented by hands-on involvement as a study nurse in clinical trials. She demonstrates strong expertise in Good Clinical Practice, patient safety, and clinical data management, ensuring strict adherence to study protocols and regulatory requirements. She is highly committed to supporting excellence in clinical research and improving healthcare outcomes.',
                ],
                [
                    'name' => 'Dedi Muhtadin, S.Kp.',
                    'role' => 'Study Nurse',
                    'description' => 'Dedi is an experienced nursing professional with a strong background in cardiovascular care. As a study nurse, he has actively supported the implementation of clinical trials in compliance with Good Clinical Practice, ensuring protocol adherence, participant safety, and data quality. Passionate about advancing medical science, he is dedicated to contributing to high-quality research that drives innovation and improves patient outcomes.',
                ],
            ],

            'dr-selvi-nafisa-shahab-spmk' => [
                [
                    'name' => 'Harfi Maulana, M.Si',
                    'role' => 'Medical Laboratory',
                    'photo' => 'frontend/images/team/harfi-maulana-ssi-msi.png',
                    'description' => 'Harfi works in medical laboratory services with experience in clinical trial research and genomics research. He focuses on specimen processing, biobank research sample storage, and supporting clinical research activities. With academic training in Biology and Biotechnology, he contributes to maintaining laboratory data quality and the integrity of research specimens.',
                ],
                [
                    'name' => 'Mentari Kasih, M.Si',
                    'role' => 'Bioinformatician',
                    'photo' => 'frontend/images/team/mentari-kasih-ssi-msi.png',
                    'description' => 'Mentari is a bioinformatician and molecular biologist specializing in human genomic variant analysis, with a focus on metabolic disorders such as familial hypercholesterolemia (FH) and Maturity-Onset Diabetes of the Young (MODY). Her work integrates genomic and clinical data analysis with laboratory-based molecular approaches, supported by a master\'s degree in Biotechnology.',
                ],
                [
                    'name' => 'Mujiarta, SH',
                    'role' => 'Administrative Officer',
                    'description' => 'Muji is administrative staff for the Clinical Research Unit (CRU), entering data into the laboratory information system; managing filing and laboratory data within the system to ensure easy access and verification; receiving laboratory supplies; and processing delivery notes into invoices for official billing.',
                ],
                [
                    'name' => 'Nabilla Zeinia Sudrajat, A. Md.Kes',
                    'role' => 'Medical Laboratory',
                    'photo' => 'frontend/images/team/nabilla-zeinia-sudrajat-amdkes.png',
                    'description' => 'Nabilla is a medical laboratory technologist with experience in clinical and health laboratory services. Her expertise includes specimen collection, processing, and genomic sample analysis to support clinical research and precision medicine initiatives. She plays a key role in supporting genomic research activities by ensuring high-quality sample management and compliance with laboratory quality standards. Having completed Good Clinical Laboratory Practice training, she is committed to upholding excellence in laboratory practice and advancing high-quality clinical research.',
                ],
                [
                    'name' => 'Shahnaz Mutia Dewi, A. Md. Kes',
                    'role' => 'Medical Laboratory',
                    'photo' => 'frontend/images/team/shahnaz-mutia-dewi-amdkes.png',
                    'description' => 'Shahnaz is a medical laboratory technologist with experience in clinical and health laboratory services, particularly in supporting clinical research and genomic initiatives. She is skilled in specimen collection, laboratory processing, and the handling of genomic samples, ensuring accuracy and quality throughout the laboratory workflow. Having completed Good Clinical Laboratory Practice training, she is dedicated to maintaining high laboratory standards, safeguarding sample integrity, and contributing to reliable research outcomes through meticulous laboratory practices.',
                ],
                ['name' => 'dr. Priscilla Kristianti, Sp.P.K., MARS', 'role' => 'Staff'],
                ['name' => 'Anugrah Dwi Handayu, ST. M.Biomed', 'role' => 'Medical Laboratory'],
                ['name' => 'dr. Ekvan Danang', 'role' => 'Staff', 'photo' => 'frontend/images/team/dr-ekvan-danang.png'],
            ],

            'dr-robert-sinto-sppd-kpti' => [
                ['name' => 'Fadhli Arif Budiman, S.Kom', 'role' => 'Staff', 'photo' => 'frontend/images/team/fadhli-arif-budiman-skom.png'],
                [
                    'name' => 'Indra, S.I.Kom',
                    'role' => 'Staff',
                    'description' => 'Indra is a staff member at the Clinical Research Unit RSCM with experience in healthcare services since 2001. He currently supports the management of internal research grants, publication incentives, and the development of technical guidelines for research implementation. With a background in communication and experience across several hospital units, he contributes to research administration, program coordination, and organizational communication to support research activities.',
                ],
                [
                    'name' => 'Rani Indah Wulandari, SKM',
                    'role' => 'Innovation Team Leader',
                    'description' => 'Rani Indah Wulandari is the Innovation Team Leader at the Clinical Research Unit (CRU), supporting the management of innovation programs, internal research grants, and research publications. With seven years of experience in research administration and innovation management, she contributes to strengthening research operations through system development, data management, process improvement, and coordination of innovation initiatives that support institutional research and continuous quality improvement.',
                ],
                ['name' => 'Rizka Fitri Nabila Tristin, S.K.M.', 'role' => 'Staff'],
                [
                    'name' => 'Widyaningsih, SKM, MKM',
                    'role' => 'Person in Charge of Big Data Analysis',
                    'description' => 'Widyaningsih, SKM, MKM is a public health professional who currently serves as the Person in Charge of the Big Data Analysis at the Clinical Research Unit (CRU), RSCM. Her responsibilities include coordinating health literacy programs, teaching research methods and evidence-based medicine, conducting clinical research and systematic reviews, and directing courses of training for internal and external CRU. She has contributed to peer-reviewed international publications and actively supports evidence-based healthcare through research, education, and scientific capacity building.',
                ],
            ],

            'siti-rizny-fitriana-saldi-apt-msc' => [
                ['name' => 'Eka Dian Safitri, dr., SpTHT-KL', 'role' => 'Staff'],
                ['name' => 'Nita Medy Ana, SKM', 'role' => 'Staff'],
                ['name' => 'Rahmi Istanti, SKM', 'role' => 'Staff'],
                ['name' => 'Respati Wulansari Ranakusuma, dr., SpTHT-KL', 'role' => 'Staff'],
            ],
        ];

        foreach ($rosters as $slug => $staffList) {
            $head = TeamMember::where('slug', $slug)->first();

            if (! $head) {
                continue;
            }

            foreach ($staffList as $i => $staff) {
                $head->staff()->create($staff + ['sort_order' => $i + 1]);
            }
        }
    }
}
