<?php
// Vikrant Namdev — Senior Azure DevOps Engineer Portfolio
// Update the contact details and project links below before publishing.
$name = "Vikrant Namdev";
$email = "vikrant.namdev@gmail.com";
$phone = "+91-7878279832";
$linkedin = "https://www.linkedin.com/in/vikrant-namdev-1854603a5";
$github = "https://github.com/namdevvikrant265-hash";

$skills = [
  "Azure Cloud" => ["Azure Landing Zones", "Hub-and-Spoke Networking", "Azure Firewall", "VNet", "ExpressRoute", "Private Endpoints", "Azure Policy", "RBAC / Entra ID"],
  "Infrastructure as Code" => ["Terraform", "Reusable Modules", "Remote State", "State Locking", "ARM Templates"],
  "DevOps & CI/CD" => ["Azure DevOps", "GitHub Actions", "Jenkins", "YAML Pipelines", "Build & Release Automation"],
  "Containers" => ["Docker", "Kubernetes", "AKS", "Helm"],
  "DevSecOps" => ["SonarQube", "Trivy", "tfsec", "TFLint", "TruffleHog", "Super-Linter", "Secret Scanning"],
  "Scripting & Observability" => ["PowerShell", "Bash", "Python", "Azure Monitor", "Log Analytics", "Prometheus", "Grafana", "CloudWatch"],
];

$experience = [
  [
    "role" => "Senior DevOps & Cloud Platform Engineer",
    "company" => "Reliance Industries Ltd",
    "period" => "Sep 2022 – Present",
    "points" => [
      "Architected and supported Azure Landing Zone and Hub-and-Spoke infrastructure across 100+ subscriptions.",
      "Built reusable Terraform modules with centralized remote state and state locking.",
      "Automated infrastructure provisioning and application delivery with Azure DevOps YAML and GitHub Actions.",
      "Implemented governance and security controls using Azure Policy, RBAC, Entra ID/PIM, Managed Identities and Key Vault.",
      "Integrated SonarQube, TFLint, tfsec and Trivy into CI/CD workflows.",
      "Supported AKS networking, Azure Monitor, Log Analytics, backup, disaster recovery and production troubleshooting.",
      "Reduced new-environment provisioning effort from about 2 business days to 30 minutes using self-service Terraform modules."
    ]
  ],
  [
    "role" => "Staff Engineer, Cloud & Deployment Support",
    "company" => "SRS Infoway (via Infosys, for BHP Australia)",
    "period" => "Jun 2022 – Aug 2022",
    "points" => [
      "Administered Azure IAM operations, RBAC audits and access troubleshooting.",
      "Supported production cloud infrastructure and application deployments.",
      "Coordinated build validation, deployment, rollback planning and post-deployment verification for Java and React applications."
    ]
  ],
  [
    "role" => "DevOps Engineer",
    "company" => "Shivam Infocom Pvt. Ltd.",
    "period" => "Dec 2019 – May 2022",
    "points" => [
      "Created 20+ reusable Terraform configurations for Azure resource groups, VNets, NSGs and compute resources.",
      "Automated CI/CD workflows using Azure Pipelines and GitHub Actions.",
      "Supported 50+ production releases and helped reduce manual operational intervention by 65%.",
      "Worked with distributed development and QA teams to reduce pipeline failure rates from around 30% to below 8%."
    ]
  ],
  [
    "role" => "DevOps Engineer",
    "company" => "Indovision Services Pvt. Ltd.",
    "period" => "Mar 2019 – Nov 2019",
    "points" => [
      "Automated provisioning of Azure virtual machines, networking and storage using Terraform.",
      "Managed infrastructure drift, remote state backends and pre-deployment validation."
    ]
  ]
];

$projects = [
  [
    "number" => "01",
    "title" => "Enterprise Azure Landing Zone Migration",
    "context" => "Reliance Industries Ltd",
    "description" => "Centralized Hub-and-Spoke architecture using Azure Firewall, ExpressRoute and Azure Policy guardrails, built with reusable parameterized Terraform modules.",
    "outcome" => "100+ subscriptions governed · Provisioning reduced from 2 days to 30 minutes · Self-service model for 10+ teams",
    "tags" => ["Azure", "Terraform", "Landing Zones", "Networking", "Governance"]
  ],
  [
    "number" => "02",
    "title" => "Azure Cloud Reliability & Disaster Recovery",
    "context" => "Reliance Industries Ltd",
    "description" => "Recovery and resilience capabilities using Azure Site Recovery, Azure Backup and geo-redundant storage, with operational visibility through Azure Monitor and Log Analytics.",
    "outcome" => "DR readiness · Failover validation · Recovery aligned with RTO/RPO",
    "tags" => ["Azure Site Recovery", "Azure Backup", "Monitoring", "RTO/RPO"]
  ],
  [
    "number" => "03",
    "title" => "DevSecOps Transformation & Microservices",
    "context" => "Enterprise client",
    "description" => "Multi-stage CI/CD pipelines across testing, staging and production, with container vulnerability scanning and static code analysis.",
    "outcome" => "Automated quality gates · Security validation · Safer containerized deployments",
    "tags" => ["CI/CD", "Trivy", "SonarQube", "Containers"]
  ]
];

function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0b1020">
  <meta name="description" content="Portfolio of Vikrant Namdev, Senior Azure DevOps Engineer specializing in Azure cloud platforms, Terraform, CI/CD and DevSecOps.">
  <title><?= e($name) ?> | Senior Azure DevOps Engineer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    :root{--bg:#0b1020;--panel:#111a2e;--panel2:#151f36;--text:#f4f7ff;--muted:#a5b1ca;--line:rgba(255,255,255,.11);--gold:#e9c46a;--cyan:#75e0d0;--max:1160px}
    *{box-sizing:border-box}html{scroll-behavior:smooth;scroll-padding-top:90px}body{margin:0;background:radial-gradient(ellipse at 80% 0%,#18264a 0,transparent 36%),var(--bg);color:var(--text);font-family:Manrope,system-ui,sans-serif;line-height:1.65}a{color:inherit;text-decoration:none}.container{width:min(var(--max),calc(100% - 40px));margin:auto}.mono,.eyebrow,.metric-label{font-family:"DM Mono",monospace}.mono{font-size:.82rem;color:var(--cyan)}.nav{position:sticky;top:0;z-index:20;background:rgba(11,16,32,.86);backdrop-filter:blur(18px);border-bottom:1px solid var(--line)}.nav-inner{display:flex;align-items:center;justify-content:space-between;min-height:74px;gap:20px}.brand{font-weight:800;letter-spacing:-.04em}.brand span{color:var(--gold)}.nav-links{display:flex;align-items:center;gap:25px;color:var(--muted);font-size:.9rem}.nav-links a:hover{color:var(--text)}.nav-cta,.btn{display:inline-flex;align-items:center;justify-content:center;gap:9px;border-radius:9px;padding:12px 17px;font-weight:800;font-size:.9rem;transition:transform .2s,background .2s}.nav-cta,.btn-primary{background:var(--gold);color:#171717}.btn:hover,.nav-cta:hover{transform:translateY(-2px)}.btn-secondary{border:1px solid var(--line);background:rgba(255,255,255,.03)}.hero{padding:94px 0 70px}.hero-grid{display:grid;grid-template-columns:1.3fr .7fr;gap:55px;align-items:center}.eyebrow{color:var(--cyan);font-size:.78rem;letter-spacing:.16em;text-transform:uppercase}.hero h1{font-size:clamp(2.6rem,6vw,5.25rem);line-height:1.04;letter-spacing:-.065em;margin:19px 0 22px}.hero h1 span{color:var(--gold)}.hero-copy{font-size:1.08rem;color:var(--muted);max-width:670px}.hero-actions{display:flex;flex-wrap:wrap;gap:12px;margin-top:28px}.hero-meta{display:flex;gap:20px;flex-wrap:wrap;color:var(--muted);font-size:.87rem;margin-top:28px}.hero-meta span{display:flex;align-items:center;gap:8px}.hero-card{position:relative;border:1px solid var(--line);border-radius:24px;background:linear-gradient(145deg,rgba(255,255,255,.08),rgba(255,255,255,.02));padding:28px;overflow:hidden}.hero-card:before{content:"";position:absolute;width:210px;height:210px;border-radius:50%;background:rgba(117,224,208,.12);filter:blur(45px);top:-80px;right:-60px}.initials{display:grid;place-items:center;width:76px;height:76px;border:1px solid rgba(233,196,106,.55);border-radius:18px;color:var(--gold);font-size:1.6rem;font-weight:800;position:relative}.hero-card h2{font-size:1.35rem;margin:22px 0 5px}.hero-card p{color:var(--muted);font-size:.9rem;margin:0}.status{display:inline-flex;align-items:center;gap:8px;font-size:.78rem;color:var(--cyan);background:rgba(117,224,208,.09);padding:7px 10px;border-radius:100px;margin-top:18px}.status:before{content:"";width:7px;height:7px;background:var(--cyan);border-radius:50%}.metrics{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;padding-bottom:76px}.metric{border:1px solid var(--line);border-radius:14px;padding:21px;background:rgba(255,255,255,.025)}.metric strong{font-size:2rem;letter-spacing:-.06em;display:block}.metric-label{color:var(--muted);font-size:.68rem;letter-spacing:.09em;text-transform:uppercase}.section{padding:70px 0}.section-head{display:flex;align-items:end;justify-content:space-between;gap:24px;margin-bottom:30px}.section h2{font-size:clamp(1.9rem,4vw,3rem);letter-spacing:-.055em;line-height:1.15;margin:10px 0}.section-intro{max-width:550px;color:var(--muted);margin:0}.skills-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:15px}.skill-card,.project-card,.experience-card{border:1px solid var(--line);background:rgba(255,255,255,.025);border-radius:16px;padding:23px}.skill-card h3{font-size:1rem;margin:0 0 15px}.tags{display:flex;flex-wrap:wrap;gap:8px}.tag{font-size:.78rem;color:#dbe4f8;border:1px solid var(--line);background:rgba(255,255,255,.035);padding:6px 9px;border-radius:7px}.projects-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}.project-card{display:flex;flex-direction:column;min-height:320px}.project-top{display:flex;justify-content:space-between;align-items:center;margin-bottom:24px}.project-number{font-family:"DM Mono",monospace;color:var(--gold);font-size:.85rem}.project-mark{color:var(--cyan);font-size:1.25rem}.project-card h3{font-size:1.18rem;line-height:1.35;margin:0 0 5px}.project-context{color:var(--gold);font-size:.78rem;margin-bottom:14px}.project-card p{color:var(--muted);font-size:.9rem;margin:0 0 18px}.outcome{font-size:.82rem;color:#dce6fa;border-left:2px solid var(--cyan);padding-left:12px;margin:0 0 18px}.project-card .tags{margin-top:auto}.timeline{display:grid;gap:16px}.experience-card{display:grid;grid-template-columns:.36fr 1fr;gap:26px}.exp-period{color:var(--cyan);font-family:"DM Mono",monospace;font-size:.78rem}.experience-card h3{margin:0;font-size:1.08rem}.company{color:var(--gold);font-size:.9rem;margin:4px 0 13px}.experience-card ul{padding-left:18px;margin:0;color:var(--muted);font-size:.9rem}.experience-card li{padding:3px 0}.education-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}.education-card{border:1px solid var(--line);border-radius:16px;padding:23px;background:rgba(255,255,255,.025)}.education-card h3{margin:0 0 7px}.education-card p{color:var(--muted);margin:0;font-size:.9rem}.cert-list{display:flex;flex-wrap:wrap;gap:10px;margin-top:18px}.contact-panel{border:1px solid rgba(233,196,106,.3);border-radius:22px;padding:clamp(24px,5vw,48px);background:linear-gradient(120deg,rgba(233,196,106,.08),rgba(117,224,208,.04));display:flex;justify-content:space-between;align-items:center;gap:28px}.contact-panel h2{margin:10px 0;font-size:clamp(1.8rem,4vw,2.8rem)}.contact-panel p{color:var(--muted);max-width:600px;margin:0}.contact-actions{display:flex;flex-direction:column;gap:10px;min-width:190px}.footer{padding:30px 0;color:var(--muted);font-size:.82rem}.footer-inner{display:flex;justify-content:space-between;gap:20px;flex-wrap:wrap;border-top:1px solid var(--line);padding-top:22px}.footer-links{display:flex;gap:16px}.footer-links a:hover{color:var(--text)}.reveal{opacity:0;transform:translateY(16px);transition:opacity .6s,transform .6s}.reveal.visible{opacity:1;transform:none}
    @media(max-width:850px){.hero-grid{grid-template-columns:1fr;gap:30px}.hero{padding-top:65px}.hero-card{max-width:520px}.skills-grid{grid-template-columns:repeat(2,1fr)}.projects-grid{grid-template-columns:1fr}.project-card{min-height:unset}.experience-card{grid-template-columns:1fr;gap:8px}.contact-panel{align-items:flex-start;flex-direction:column}.contact-actions{flex-direction:row;flex-wrap:wrap}.metrics{grid-template-columns:repeat(2,1fr)}}
    @media(max-width:560px){.container{width:min(100% - 28px,var(--max))}.nav-inner{min-height:65px}.nav-links{gap:13px}.nav-links a:not(.nav-cta){display:none}.nav-cta{padding:9px 12px}.hero h1{font-size:2.75rem}.hero-meta{gap:12px}.skills-grid,.education-grid{grid-template-columns:1fr}.metric{padding:16px}.metric strong{font-size:1.65rem}.section{padding:52px 0}.section-head{align-items:flex-start;flex-direction:column}.hero-card{padding:22px}}
    @media(prefers-reduced-motion:reduce){html{scroll-behavior:auto}.reveal{opacity:1;transform:none;transition:none}*{transition:none!important}}
  </style>
</head>
<body>
<header class="nav">
  <div class="container nav-inner">
    <a class="brand" href="#home">VN<span>.</span></a>
    <nav class="nav-links" aria-label="Main navigation">
      <a href="#skills">Skills</a><a href="#projects">Projects</a><a href="#experience">Experience</a><a href="#contact">Contact</a>
      <a class="nav-cta" href="<?= e($linkedin) ?>" target="_blank" rel="noreferrer">Connect ↗</a>
    </nav>
  </div>
</header>

<main id="home">
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <div class="eyebrow">Cloud · Platform Engineering · DevSecOps</div>
        <h1>Building cloud platforms that are <span>secure, scalable</span> & automated.</h1>
        <p class="hero-copy">I’m <?= e($name) ?>, a Senior Azure DevOps Engineer with 15+ years in IT, focused on Azure platform engineering, Terraform-based infrastructure automation, CI/CD, cloud governance and production reliability.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="#projects">Explore projects <span>↘</span></a>
          <a class="btn btn-secondary" href="mailto:<?= e($email) ?>">Email me ↗</a>
        </div>
        <div class="hero-meta">
          <span>⌖ Gwalior, India</span><span>☁ Azure & AWS</span><span>⚙ Automation first</span>
        </div>
      </div>
      <aside class="hero-card">
        <div class="initials">VN</div>
        <h2><?= e($name) ?></h2>
        <p>Senior Azure DevOps Engineer</p>
        <p>CI/CD · Terraform · DevSecOps · Build & Release Automation</p>
        <div class="status">Focused on reliable cloud delivery</div>
        <div style="height:1px;background:var(--line);margin:24px 0 18px"></div>
        <div class="mono">CORE APPROACH</div>
        <p style="margin-top:8px">Infrastructure as Code, policy-driven governance, automated quality gates and measurable operational outcomes.</p>
      </aside>
    </div>
  </section>

  <section class="container metrics" aria-label="Career highlights">
    <div class="metric"><strong>15+</strong><div class="metric-label">Years in IT</div></div>
    <div class="metric"><strong>8+</strong><div class="metric-label">Years Azure platform engineering</div></div>
    <div class="metric"><strong>100+</strong><div class="metric-label">Subscriptions governed</div></div>
    <div class="metric"><strong>65%</strong><div class="metric-label">Less manual effort</div></div>
  </section>

  <section class="section" id="skills">
    <div class="container">
      <div class="section-head"><div><div class="eyebrow">Technical toolkit</div><h2>Skills & capabilities</h2></div><p class="section-intro">A practical toolkit for building governed cloud foundations, repeatable infrastructure and secure delivery pipelines.</p></div>
      <div class="skills-grid">
        <?php foreach ($skills as $category => $items): ?>
        <article class="skill-card reveal"><h3><?= e($category) ?></h3><div class="tags"><?php foreach ($items as $item): ?><span class="tag"><?= e($item) ?></span><?php endforeach; ?></div></article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" id="projects">
    <div class="container">
      <div class="section-head"><div><div class="eyebrow">Selected work</div><h2>Projects with measurable impact</h2></div><p class="section-intro">Representative initiatives from enterprise cloud platform engineering, reliability and DevSecOps delivery.</p></div>
      <div class="projects-grid">
        <?php foreach ($projects as $project): ?>
        <article class="project-card reveal">
          <div class="project-top"><span class="project-number"><?= e($project["number"]) ?> / PROJECT</span><span class="project-mark">↗</span></div>
          <h3><?= e($project["title"]) ?></h3><div class="project-context"><?= e($project["context"]) ?></div>
          <p><?= e($project["description"]) ?></p><div class="outcome"><?= e($project["outcome"]) ?></div>
          <div class="tags"><?php foreach ($project["tags"] as $tag): ?><span class="tag"><?= e($tag) ?></span><?php endforeach; ?></div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" id="experience">
    <div class="container">
      <div class="section-head"><div><div class="eyebrow">Career journey</div><h2>Professional experience</h2></div><p class="section-intro">Cloud platform engineering, deployment automation and production operations across enterprise environments.</p></div>
      <div class="timeline">
        <?php foreach ($experience as $job): ?>
        <article class="experience-card reveal">
          <div class="exp-period"><?= e($job["period"]) ?></div>
          <div><h3><?= e($job["role"]) ?></h3><div class="company"><?= e($job["company"]) ?></div><ul><?php foreach ($job["points"] as $point): ?><li><?= e($point) ?></li><?php endforeach; ?></ul></div>
        </article>
        <?php endforeach; ?>
        <article class="experience-card reveal"><div class="exp-period">Jul 2010 – Feb 2019</div><div><h3>Network Engineering & IT Infrastructure</h3><div class="company">Samsung India Electronics · Apex Engineers · IT Brain Technologies · Zep Infratech · Netwing Technologies</div><p style="color:var(--muted);margin:0;font-size:.9rem">Earlier roles spanning RF engineering, network engineering, team leadership and enterprise IT infrastructure.</p></div></article>
      </div>
    </div>
  </section>

  <section class="section" id="education">
    <div class="container">
      <div class="section-head"><div><div class="eyebrow">Foundation</div><h2>Education & professional development</h2></div></div>
      <div class="education-grid">
        <article class="education-card"><h3>B.E. — Electronics & Communication</h3><p>RGPV University · 2008</p></article>
        <article class="education-card"><h3>Certifications & training</h3><p>Azure & Cloud Platform Engineering Foundations · IT Architecture (Reliance) · Google Cloud Professional Training · Blockchain Professional (Reliance) · Agile & Scrum Methodologies</p></article>
      </div>
      <div class="cert-list"><span class="tag">DevSecOps Excellence Award</span><span class="tag">Reliance Innovation & Automation Award</span><span class="tag">Client Recognition Award</span></div>
    </div>
  </section>

  <section class="section" id="contact">
    <div class="container">
      <div class="contact-panel reveal">
        <div><div class="eyebrow">Let's connect</div><h2>Have a cloud platform challenge?</h2><p>For conversations about Azure architecture, Terraform, CI/CD automation, DevSecOps or cloud reliability, feel free to reach out.</p></div>
        <div class="contact-actions">
          <a class="btn btn-primary" href="mailto:<?= e($email) ?>">✉ <?= e($email) ?></a>
          <a class="btn btn-secondary" href="<?= e($linkedin) ?>" target="_blank" rel="noreferrer">LinkedIn profile ↗</a>
          <a class="btn btn-secondary" href="<?= e($github) ?>" target="_blank" rel="noreferrer">GitHub profile ↗</a>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="footer"><div class="container footer-inner"><span>© <?= date("Y") ?> <?= e($name) ?>. Built for cloud engineering.</span><div class="footer-links"><a href="<?= e($linkedin) ?>" target="_blank" rel="noreferrer">LinkedIn</a><a href="<?= e($github) ?>" target="_blank" rel="noreferrer">GitHub</a><a href="mailto:<?= e($email) ?>">Email</a></div></div></footer>
<script>
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, {threshold: 0.12});
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
</body>
</html>
