<?php

$currentPage = basename($_SERVER['PHP_SELF']);

/*
|--------------------------------------------------------------------------
| PAGE SEO - PODDAR NURSING HOME
|--------------------------------------------------------------------------
*/

$seoData = [

    /* Home */
    "index.php" => [
        "title" => "Poddar Nursing Home | Best Multi-Speciality Hospital in Ghaziabad",
        "description" => "Poddar Nursing Home is a trusted multi-speciality hospital in Ghaziabad providing expert doctors, advanced diagnostics, laparoscopic surgery, maternity care, orthopaedics, pathology, physiotherapy, and dental care.",
        "keywords" => "Poddar Nursing Home, best hospital Ghaziabad, multi speciality hospital, Ghaziabad hospital",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* About */
    "about-us.php" => [
        "title" => "About Poddar Nursing Home | Trusted Healthcare Since 1985",
        "description" => "Learn about Poddar Nursing Home, a trusted multi-speciality hospital in Ghaziabad serving patients with ethical healthcare, experienced specialists, and modern medical facilities since 1985.",
        "keywords" => "about Poddar Nursing Home, Ghaziabad hospital, healthcare since 1985",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Services */
    "services.php" => [
        "title" => "Our Medical Services | Poddar Nursing Home Ghaziabad",
        "description" => "Explore comprehensive medical services at Poddar Nursing Home including General Medicine, Surgery, Orthopaedics, Obstetrics & Gynaecology, Pathology, Physiotherapy, and Dental Care.",
        "keywords" => "medical services Ghaziabad, hospital services, healthcare treatments",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "general-medicine.php" => [
        "title" => "General Medicine | Physician Treatment in Ghaziabad | Poddar Nursing Home",
        "description" => "Expert General Medicine services in Ghaziabad for fever, diabetes, hypertension, infections, and preventive healthcare by experienced physicians at Poddar Nursing Home.",
        "keywords" => "general physician Ghaziabad, medicine doctor, internal medicine",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "general-surgery.php" => [
        "title" => "General Surgery | Advanced Surgical Care in Ghaziabad",
        "description" => "Advanced General Surgery at Poddar Nursing Home with experienced surgeons offering safe surgical treatment using modern techniques and compassionate patient care.",
        "keywords" => "general surgery Ghaziabad, surgeon hospital, surgical treatment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "orthopaedics.php" => [
        "title" => "Orthopaedics | Bone & Joint Specialist in Ghaziabad",
        "description" => "Expert orthopaedic treatment for bone, joint, fracture, arthritis, and sports injuries at Poddar Nursing Home in Ghaziabad.",
        "keywords" => "orthopaedic doctor Ghaziabad, bone specialist, joint pain treatment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "obstetrics-gynaecology.php" => [
        "title" => "Obstetrics & Gynaecology | Women's Healthcare in Ghaziabad",
        "description" => "Comprehensive women's healthcare including pregnancy care, infertility treatment, normal delivery, C-section, and gynaecology services at Poddar Nursing Home.",
        "keywords" => "gynaecologist Ghaziabad, pregnancy care, maternity hospital",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "laparoscopic-surgery.php" => [
        "title" => "Laparoscopic Surgery | Minimally Invasive Surgery in Ghaziabad",
        "description" => "Advanced laparoscopic surgery for hernia, gallstones, piles, fissure, fistula, and gastrointestinal conditions at Poddar Nursing Home.",
        "keywords" => "laparoscopic surgery Ghaziabad, hernia surgery, gallstone surgery",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "pathology.php" => [
        "title" => "Pathology Lab | Digital X-Ray & Diagnostic Tests in Ghaziabad",
        "description" => "Fully equipped pathology laboratory offering blood tests, digital X-ray, ECG, ultrasound, and advanced diagnostics at Poddar Nursing Home.",
        "keywords" => "pathology lab Ghaziabad, diagnostic tests, digital xray",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "physiotherapy.php" => [
        "title" => "Physiotherapy | Pain Relief & Rehabilitation in Ghaziabad",
        "description" => "Professional physiotherapy services for pain management, rehabilitation, sports injuries, and mobility improvement at Poddar Nursing Home.",
        "keywords" => "physiotherapy Ghaziabad, rehabilitation, pain relief treatment",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dental-care.php" => [
        "title" => "Dental Care | Complete Oral Healthcare in Ghaziabad",
        "description" => "Comprehensive dental care including routine checkups, preventive dentistry, tooth treatments, and oral healthcare services at Poddar Nursing Home.",
        "keywords" => "dental care Ghaziabad, dentist hospital, oral healthcare",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Doctors */
    "doctors.php" => [
        "title" => "Our Doctors | Experienced Specialists at Poddar Nursing Home",
        "description" => "Meet experienced doctors and specialists at Poddar Nursing Home providing trusted healthcare across multiple medical specialties in Ghaziabad.",
        "keywords" => "Poddar Nursing Home doctors, specialist doctors Ghaziabad",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dr-rk-poddar.php" => [
        "title" => "Dr. R. K. Poddar | General Surgeon in Ghaziabad",
        "description" => "Meet Dr. R. K. Poddar, Managing Director and experienced General Surgeon at Poddar Nursing Home, Ghaziabad.",
        "keywords" => "Dr RK Poddar, general surgeon Ghaziabad",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dr-madhu-poddar.php" => [
        "title" => "Dr. Madhu Poddar | Consultant Physician in Ghaziabad",
        "description" => "Meet Dr. Madhu Poddar, Director and Consultant Physician specializing in Internal Medicine at Poddar Nursing Home.",
        "keywords" => "Dr Madhu Poddar, physician Ghaziabad, internal medicine",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dr-rahul-poddar.php" => [
        "title" => "Dr. Rahul Poddar | Laparoscopic & Colorectal Surgeon",
        "description" => "Meet Dr. Rahul Poddar, General, Laparoscopic & Colorectal Surgeon specializing in minimally invasive surgery at Poddar Nursing Home.",
        "keywords" => "Dr Rahul Poddar, laparoscopic surgeon Ghaziabad, colorectal surgeon",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dr-mayank-poddar.php" => [
        "title" => "Dr. Mayank Poddar | Orthopaedic Specialist in Ghaziabad",
        "description" => "Meet Dr. Mayank Poddar, Orthopaedic Specialist providing bone, joint, fracture, and arthritis treatment at Poddar Nursing Home.",
        "keywords" => "Dr Mayank Poddar, orthopaedic doctor Ghaziabad",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dr-neha-poddar.php" => [
        "title" => "Dr. Neha Poddar | Obstetrician & Gynaecologist in Ghaziabad",
        "description" => "Meet Dr. Neha Poddar, Consultant Obstetrician & Gynaecologist specializing in pregnancy care, infertility, and laparoscopic gynaecology.",
        "keywords" => "Dr Neha Poddar, gynaecologist Ghaziabad, pregnancy specialist",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "dr-rajeev-goel.php" => [
        "title" => "Dr. Rajeev Goel | ENT Specialist in Ghaziabad",
        "description" => "Meet Dr. Rajeev Goel, ENT Specialist providing expert ear, nose, and throat treatment at Poddar Nursing Home.",
        "keywords" => "Dr Rajeev Goel, ENT specialist Ghaziabad",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Other Pages */
    "gallery.php" => [
        "title" => "Hospital Gallery | Poddar Nursing Home Ghaziabad",
        "description" => "Explore Poddar Nursing Home through our gallery featuring hospital facilities, medical equipment, and patient care environment.",
        "keywords" => "hospital gallery Ghaziabad, Poddar Nursing Home photos",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "blog.php" => [
        "title" => "Health Blog | Medical Tips & Wellness | Poddar Nursing Home",
        "description" => "Read health tips, wellness guides, preventive care advice, and medical awareness articles from Poddar Nursing Home.",
        "keywords" => "health blog Ghaziabad, wellness tips, medical articles",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    "contact-us.php" => [
        "title" => "Contact Poddar Nursing Home | Book an Appointment",
        "description" => "Contact Poddar Nursing Home in Ghaziabad for appointments, consultations, emergency care, and healthcare enquiries.",
        "keywords" => "contact Poddar Nursing Home, hospital appointment Ghaziabad",
        "canonical" => "",
        "robots" => "index, follow"
    ],

];

/*
|--------------------------------------------------------------------------
| DEFAULT META
|--------------------------------------------------------------------------
*/

$defaultMeta = [
    "title" => "Poddar Nursing Home | Multi-Speciality Hospital in Ghaziabad",
    "description" => "Poddar Nursing Home provides trusted multi-speciality healthcare with experienced doctors, modern diagnostics, advanced surgery, and compassionate patient care in Ghaziabad.",
    "keywords" => "Poddar Nursing Home, Ghaziabad hospital, healthcare",
    "canonical" => "",
    "robots" => "index, follow"
];

/*
|--------------------------------------------------------------------------
| META SELECTOR
|--------------------------------------------------------------------------
*/

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;
?>