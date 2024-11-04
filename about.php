<!-- About.php -->
<div class="about-section">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4 mb-4">Tentang Ridho Fauzi</h1>
            <p class="lead">"Ketekunan dan kerja keras adalah chakra yang menggerakkan seorang developer sejati!"</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6 offset-md-3 text-center">
            <h2 class="text-orange">Perjalanan Ninja Teknologi</h2>
            <p>Saya adalah seorang developer web yang terus belajar dan berjuang untuk mencapai puncak dunia teknologi. Seperti ninja yang terus berlatih jutsu, saya mengasah kemampuan saya di berbagai bidang pengembangan web.</p>
            <p>Berikut adalah beberapa skill utama yang saya miliki, yang saya sebut "Jutsu Web Developer":</p>
        </div>
    </div>
    
    <div class="row skill-section text-center">
        <div class="col-md-4">
            <div class="skill">
                <h3>HTML</h3>
                <div class="chakra-bar">
                    <div class="chakra-fill" style="width: 90%;"></div>
                </div>
                <p class="skill-level">90% Chakra</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="skill">
                <h3>CSS</h3>
                <div class="chakra-bar">
                    <div class="chakra-fill" style="width: 85%;"></div>
                </div>
                <p class="skill-level">85% Chakra</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="skill">
                <h3>JavaScript</h3>
                <div class="chakra-bar">
                    <div class="chakra-fill" style="width: 75%;"></div>
                </div>
                <p class="skill-level">75% Chakra</p>
            </div>
        </div>
    </div>
</div>

<!-- Styling -->
<style>
    .about-section {
        margin-top: 50px;
        color: #333;
    }
    
    .text-orange {
        color: #FF8C00;
    }
    
    .skill-section {
        margin-top: 30px;
    }
    
    .skill {
        margin-bottom: 20px;
    }
    
    .chakra-bar {
        width: 80%;
        background-color: #f0f0f0;
        border-radius: 20px;
        overflow: hidden;
        margin: 0 auto;
        position: relative;
        height: 25px;
    }
    
    .chakra-fill {
        height: 100%;
        background-color: #FF8C00;
        border-radius: 20px;
        animation: chakra-animation 2s ease-in-out infinite;
    }
    
    .skill-level {
        margin-top: 5px;
        font-weight: bold;
        color: #FF8C00;
    }
    
    @keyframes chakra-animation {
        0% { opacity: 0.7; transform: scaleX(1); }
        50% { opacity: 1; transform: scaleX(1.05); }
        100% { opacity: 0.7; transform: scaleX(1); }
    }
</style>
