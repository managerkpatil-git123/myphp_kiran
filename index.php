
<?php
// Google Developer Group - Welcome Page

$groupName = "Google Developer Group";
$mainTitle = "Welcome to " . $groupName;
$tagline = "Red-Hot Opens Hit K8s Deployments";

$currentDate = date("d M Y");
$currentTime = date("h:i:s A");

$technologies = [
    [
        "name" => "Kubernetes",
        "description" => "Container orchestration and scalable deployments.",
        "icon" => "☸️"
    ],
    [
        "name" => "Docker",
        "description" => "Build, package and ship applications.",
        "icon" => "🐳"
    ],
    [
        "name" => "DevOps",
        "description" => "Automate CI/CD pipelines and delivery.",
        "icon" => "⚙️"
    ],
    [
        "name" => "Cloud Native",
        "description" => "Build resilient and scalable applications.",
        "icon" => "☁️"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>GDG | Red-Hot K8s Deployments</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #101827, #202c44);
            color: white;
            min-height: 100vh;
        }

        header {
            padding: 25px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ffffff22;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #ffffff;
        }

        .logo span {
            color: #ff5252;
        }

        .status {
            background: #173c2b;
            color: #65f5a2;
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 13px;
        }

        .hero {
            text-align: center;
            padding: 90px 20px 70px;
        }

        .hero h1 {
            font-size: clamp(32px, 5vw, 58px);
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #4285f4;
        }

        .hero h2 {
            color: #ff5252;
            font-size: clamp(20px, 3vw, 30px);
            margin-bottom: 25px;
        }

        .hero p {
            max-width: 750px;
            margin: auto;
            color: #cbd5e1;
            font-size: 17px;
            line-height: 1.8;
        }

        .deployment {
            margin: 35px auto;
            padding: 20px;
            max-width: 650px;
            background: #18253b;
            border: 1px solid #ff525266;
            border-radius: 15px;
            box-shadow: 0 0 25px #ff303044;
        }

        .deployment h3 {
            color: #ff6666;
            margin-bottom: 12px;
        }

        .deployment p {
            color: #d1d5db;
            font-size: 14px;
        }

        .pulse {
            display: inline-block;
            width: 10px;
            height: 10px;
            background: #35e88a;
            border-radius: 50%;
            margin-right: 8px;
            animation: blink 1.2s infinite;
        }

        @keyframes blink {
            50% { opacity: 0.3; }
        }

        .section {
            padding: 40px 8% 80px;
            text-align: center;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 35px;
        }

        .cards {
            display: grid;
            grid-template-columns:
                repeat(auto-fit, minmax(220px, 1fr));
            gap: 22px;
        }

        .card {
            background: #1e2c43;
            padding: 30px 20px;
            border-radius: 15px;
            border: 1px solid #ffffff15;
            transition: transform 0.3s, border-color 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            border-color: #4285f4;
        }

        .icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 12px;
            color: #8ab4f8;
        }

        .card p {
            color: #cbd5e1;
            line-height: 1.6;
            font-size: 14px;
        }

        .cta {
            text-align: center;
            padding: 50px 20px;
            background: #17243a;
        }

        .cta h2 {
            margin-bottom: 15px;
        }

        .cta p {
            color: #cbd5e1;
            line-height: 1.7;
        }

        footer {
            padding: 25px;
            text-align: center;
            color: #94a3b8;
            font-size: 13px;
            border-top: 1px solid #ffffff15;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
                gap: 15px;
            }

            .hero {
                padding-top: 60px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        <span>GDG</span> | Developers Community
    </div>

    <div class="status">
        <span class="pulse"></span>
        RED-HOT DEPLOYMENT
    </div>
</header>

<section class="hero">

    <h1>
        <?php echo htmlspecialchars($mainTitle); ?>
        <span>!</span>
    </h1>

    <h2>
        🔥 <?php echo htmlspecialchars($tagline); ?> 🔥
    </h2>

    <p>
        Welcome developers, innovators and technology enthusiasts!
        Join us as we explore cloud-native technologies,
        Kubernetes, DevOps, automation and the future of
        application deployment.
    </p>

    <div class="deployment">
        <h3>🚀 Kubernetes Deployment Dashboard</h3>

        <p>
            <span class="pulse"></span>
            Application Welcome Page Successfully Loaded
        </p>

        <p style="margin-top:12px;">
            Deployment Theme: Red-Hot K8s
        </p>

        <p style="margin-top:8px;">
            Server Date: <?php echo $currentDate; ?>
        </p>

        <p>
            Server Time: <?php echo $currentTime; ?>
        </p>
    </div>

</section>

<section class="section">

    <h2>Explore the Technology Universe</h2>

    <div class="cards">

        <?php foreach ($technologies as $tech): ?>

            <div class="card">

                <div class="icon">
                    <?php echo $tech["icon"]; ?>
                </div>

                <h3>
                    <?php echo htmlspecialchars($tech["name"]); ?>
                </h3>

                <p>
                    <?php echo htmlspecialchars($tech["description"]); ?>
                </p>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<section class="cta">

    <h2>Code. Collaborate. Innovate. Deploy.</h2>

    <p>
        Together, let's build the next generation of
        cloud-native applications.<br>
        Learn, share and grow with Google Developer Group!
    </p>

</section>

<footer>

    &copy; <?php echo date("Y"); ?>
    Google Developer Group.
    Built with PHP and Cloud-Native Technology.

</footer>

</body>
</html>
