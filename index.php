<!DOCTYPE html>
<html lang="en">
<head>
  <!-- 01. Meta Tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="description" content="Portfolio of Kevin Hitt, a tech-forward professional with a master’s in analytics and a focus on educational systems, automation, and workforce data."/>
  <meta name="author" content="Kevin Hitt"/>
  <link rel="author" href=""/>
  <meta name="keywords" content="Kevin Hitt, data science, business analytics, information systems, microcredentials, educational technology, digital badges, higher education, workforce development, Python, SQL, education automation, non-credit programs, credential strategy, portfolio projects, AI in education"/>
  <meta name="robots" content="index, follow"/>
  <meta name="revisit-after" content="30 days"/>

  <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128">

  <link rel="apple-touch-icon" href="icons/apple-touch-icon-iphone-60x60.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-touch-icon-ipad-76x76">
  <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-iphone-retina-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-ipad-retina-152x152.png">

  <title>K. Hitt Portfolio</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --bg-color: #0a0a0a;
            --card-bg: #0a0a0a;
            --text-primary: #ffffff;
            --text-secondary: #e0e0e0;
            --text-muted: #a0a0a0;
            --text-light: #707070;
            --border-color: #222222;
            /*--link-color: #009374;*/
            --link-color: #ffffff;
        }
        
        [data-theme="light"] {
            --bg-color: #ffffff;
            --card-bg: #ffffff;
            --text-primary: #000000;
            --text-secondary: #333333;
            --text-muted: #666666;
            --text-light: #999999;
            --border-color: #f0f0f0;
            --link-color: #009374;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            line-height: 1.6;
            color: var(--text-secondary);
            background: var(--bg-color);
            font-size: 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
            min-height: 100vh;
            position: relative;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 60px 40px;
            display: grid;
            gap: 48px;
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 48px;
        }
        
        h1 {
            font-size: 24px;
            font-weight: 600;
            color: var(--text-primary);
            margin: 0;
        }
        
        .theme-toggle {
            background: none;
            border: 1px solid var(--border-color);
            color: var(--text-secondary);
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.2s ease;
        }
        
        .theme-toggle:hover {
            background: var(--border-color);
        }
        
        .nav-section {
            display: grid;
            gap: 16px;
        }
        
        .nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 12px;
        }
        
        .nav-item {
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            text-align: center;
            transition: all 0.2s ease;
            background: var(--card-bg);
        }
        
        .nav-item:hover {
            background: var(--border-color);
            transform: translateY(-1px);
        }
        
        .nav-item a {
            color: var(--link-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        h2 {
            font-size: 18px;
            font-weight: 500;
            color: var(--text-primary);
            margin-bottom: 24px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .status {
            font-size: 14px;
            color: var(--text-muted);
            padding: 16px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background: var(--card-bg);
        }
        
        .projects-grid {
            display: grid;
            gap: 24px;
        }
        
        .project-card {
            padding: 24px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            transition: all 0.2s ease;
            background: var(--card-bg);
            border-left: 3px solid var(--border-color);
            position: relative;
        }
        
        .project-card.work {
            border-left-color: #009374;
        }
        
        .project-card.personal {
            border-left-color: #8b5cf6;
        }
        
        .project-card.school {
            border-left-color: #f59e0b;
        }
        
        .project-date {
            position: absolute;
            bottom: 16px;
            right: 20px;
            font-size: 11px;
            color: var(--text-light);
            font-weight: 400;
            opacity: 0.7;
        }
        
        .project-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.05);
        }
        
        [data-theme="light"] .project-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .project-title {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
            font-size: 16px;
        }
        
        .project-description {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.5;
            margin-bottom: 12px;
        }
        
        .project-tech {
            font-size: 12px;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }
        
        .skill-card {
            padding: 20px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background: var(--card-bg);
        }
        
        .skill-title {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
            font-size: 14px;
        }
        
        .skill-description {
            font-size: 13px;
            color: var(--text-muted);
            line-height: 1.4;
        }
        
        .experience-grid {
            display: grid;
            gap: 20px;
        }
        
        .experience-card {
            padding: 20px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 16px;
            align-items: start;
            background: var(--card-bg);
        }
        
        .experience-content {
            display: grid;
            gap: 8px;
        }
        
        .experience-title {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 15px;
        }
        
        .experience-description {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.4;
        }
        
        .experience-date {
            font-size: 12px;
            color: var(--text-light);
            text-align: right;
            white-space: nowrap;
        }
        
        a {
            color: var(--link-color);
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        .timestamp {
            font-size: 12px;
            color: var(--text-light);
            text-align: center;
            padding: 16px;
            border-top: 1px solid var(--border-color);
        }
        
        @media (max-width: 768px) {
            
            .theme-toggle {
                display: none;
            }
            .container {
                padding: 40px 20px;
                gap: 32px;
            }
            
            .header {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            
            h1 {
                font-size: 22px;
            }
            
            .nav-grid {
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
                gap: 8px;
            }
            
            .nav-item {
                padding: 10px 12px;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
            }
            
            .experience-card {
                grid-template-columns: 1fr;
                gap: 12px;
            }
            
            .experience-date {
                text-align: left;
            }
            
            .project-card {
                padding: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .nav-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        .topnav-logo img{
            height: 88px;
            margin-left:-78px;
        }
        

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Kevin Hitt</h1>
            <div class="topnav-logo hover14"><a href="/"><img src="logo.png"></a></div>
            <button class="theme-toggle" id="theme-toggle">
                <span id="theme-icon">☀</span>
            </button>
        </div>
        
        <div class="nav-section">
            <div class="nav-grid">
                <div class="nav-item">
                    <a target="_blank" href="mailto:kevin@hitt.work?Subject=Website%20Inquiry">Email</a>
                </div>
                <div class="nav-item">
                    <a target="_blank" href="sms:+18134613884?body=Website%20Inquiry%20-%20">Text</a>
                </div>
                
                <!---
                <div class="nav-item">
                    <a target="_blank" href="https://www.linkedin.com/in/kevinhitt">LinkedIn</a>
                </div>
                <div class="nav-item">
                    <a target="_blank" href="https://github.com/kevinhitt">GitHub</a>
                </div>
                <div class="nav-item">
                    <a target="_blank" href="https://x.com/repneuable">Twitter</a>
                </div>
                <div class="nav-item">
                    <a target="_blank" href="https://hitt.work/resume.pdf">Resume</a>
                </div>-->
            </div>
        </div>
        
        <div class="status">
            Currently available for new projects. Last updated <span id="timestamp"></span>.
        </div>
         
        <section>
            <h2>Recent Work</h2>
            <div class="projects-grid">
                <?php include("projects.html"); ?> 
                <?php include("projects-snippets.html"); ?>
            </div>
        </section>
        
        <section>
            <h2>Skills</h2>
            <div class="skills-grid">

                <?php include("skills.html"); ?>
                <?php include("skills-snippets.html"); ?>

            </div>
        </section>
        
        <section>
            <h2>Experience</h2>
            <div class="experience-card">
                <?php include("experiences-snippets.html"); ?>
                <?php include("experiences.html"); ?>
                
            </div>
        </section>
        
        <div class="timestamp">
            Last updated: <span id="current-time"></span>
        </div>
    </div>
    
    <script>
        // Set dark theme immediately before page loads
        document.documentElement.setAttribute('data-theme', 'dark');
        
        // Theme toggle functionality
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        
        // Check for saved theme preference or default to dark mode
        const savedTheme = localStorage.getItem('theme');
        const currentTheme = savedTheme || 'dark';
        document.documentElement.setAttribute('data-theme', currentTheme);
        
        // Update button icon after elements are loaded
        document.addEventListener('DOMContentLoaded', function() {
            const themeIcon = document.getElementById('theme-icon');
            themeIcon.textContent = currentTheme === 'dark' ? '☀' : '☾';
        });
        
        themeToggle.addEventListener('click', function() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            themeIcon.textContent = newTheme === 'dark' ? '☀' : '☾';
        });
        
        // Timestamp functionality
        function updateTimestamp() {
            const now = new Date();
            const timestamp = now.toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            document.getElementById('timestamp').textContent = timestamp;
            document.getElementById('current-time').textContent = timestamp;
        }
        
        updateTimestamp();
    </script>
</body>
</html>