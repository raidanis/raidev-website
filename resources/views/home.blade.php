@extends('layouts.app')

@section('title', 'Home - Raid Anis Kerkatou')

@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="stars"></div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    Raid Anis<br>Kerkatou
                </h1>
                <p class="hero-subtitle">PhD Researcher in Quantum Artificial Intelligence</p>
                <p class="animated-tagline">
                    <span class="tagline-text">Building the Future of Cybersecurity with Quantum Machine Learning</span>
                </p>
                <div class="hero-buttons">
                    <a href="/research" class="btn btn-primary">View Research</a>
                    <a href="/cv" class="btn btn-secondary">Download CV</a>
                    <a href="/contact" class="btn btn-tertiary">Contact Me</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="quantum-visualization">
                    <div class="qubit"></div>
                    <div class="qubit"></div>
                    <div class="qubit"></div>
                    <div class="circuit-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Highlights -->
<section class="highlights">
    <div class="container">
        <div class="highlights-grid">
            <div class="highlight-card">
                <div class="highlight-icon">📄</div>
                <h3>Publications</h3>
                <p class="highlight-number">15+</p>
                <p class="highlight-text">Peer-reviewed papers</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon">🧠</div>
                <h3>Models Built</h3>
                <p class="highlight-number">20+</p>
                <p class="highlight-text">QNN, QSVM, QCNN</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon">📊</div>
                <h3>Datasets</h3>
                <p class="highlight-number">5+</p>
                <p class="highlight-text">NSL-KDD, CIC-IDS2017, FloodNet</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon">🏆</div>
                <h3>Conferences</h3>
                <p class="highlight-number">10+</p>
                <p class="highlight-text">IEEE, CompSysTech, IJCAI</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Work -->
<section class="featured">
    <div class="container">
        <h2 class="section-title">Featured Research</h2>
        <div class="featured-grid">
            <div class="featured-card">
                <div class="featured-header">
                    <span class="featured-tag">Quantum ML</span>
                </div>
                <h3>Hybrid QNN for Intrusion Detection</h3>
                <p>A novel hybrid quantum-classical neural network achieving 97.3% accuracy on NSL-KDD dataset with reduced circuit depth.</p>
                <ul class="featured-details">
                    <li><strong>Method:</strong> VQC + Classical NN</li>
                    <li><strong>Dataset:</strong> NSL-KDD</li>
                    <li><strong>Accuracy:</strong> 97.3%</li>
                </ul>
                <a href="/research#projects" class="learn-more">Explore Research →</a>
            </div>
            <div class="featured-card">
                <div class="featured-header">
                    <span class="featured-tag">Comparative Study</span>
                </div>
                <h3>QSVM vs Classical SVM for IDS</h3>
                <p>Comprehensive benchmarking of Quantum Support Vector Machines against classical methods for cybersecurity applications.</p>
                <ul class="featured-details">
                    <li><strong>Models:</strong> QSVM, SVM, RF</li>
                    <li><strong>Dataset:</strong> CIC-IDS2017</li>
                    <li><strong>Winner:</strong> QSVM (95.8%)</li>
                </ul>
                <a href="/research#projects" class="learn-more">View Paper →</a>
            </div>
            <div class="featured-card">
                <div class="featured-header">
                    <span class="featured-tag">Computer Vision</span>
                </div>
                <h3>FloodNet Semantic Segmentation</h3>
                <p>Deep learning approach for flood damage assessment using satellite imagery with state-of-the-art segmentation techniques.</p>
                <ul class="featured-details">
                    <li><strong>Models:</strong> U-Net, DeepLab</li>
                    <li><strong>IoU Score:</strong> 0.89</li>
                    <li><strong>Application:</strong> Disaster Detection</li>
                </ul>
                <a href="/portfolio" class="learn-more">View Project →</a>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack -->
<section class="tech-stack">
    <div class="container">
        <h2 class="section-title">Tech Stack</h2>
        <div class="tech-categories">
            <div class="tech-category">
                <h3>🤖 AI & ML</h3>
                <div class="tech-list">
                    <span class="tech-badge">Python</span>
                    <span class="tech-badge">PyTorch</span>
                    <span class="tech-badge">TensorFlow</span>
                    <span class="tech-badge">Scikit-learn</span>
                </div>
            </div>
            <div class="tech-category">
                <h3>⚛️ Quantum Computing</h3>
                <div class="tech-list">
                    <span class="tech-badge">PennyLane</span>
                    <span class="tech-badge">Qiskit</span>
                    <span class="tech-badge">Cirq</span>
                    <span class="tech-badge">IBM Quantum</span>
                </div>
            </div>
            <div class="tech-category">
                <h3>🌐 Web Development</h3>
                <div class="tech-list">
                    <span class="tech-badge">Laravel</span>
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">MySQL</span>
                    <span class="tech-badge">Bootstrap</span>
                </div>
            </div>
            <div class="tech-category">
                <h3>🛠️ DevOps & Tools</h3>
                <div class="tech-list">
                    <span class="tech-badge">Docker</span>
                    <span class="tech-badge">Linux</span>
                    <span class="tech-badge">Git</span>
                    <span class="tech-badge">Jupyter</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Let's Collaborate</h2>
            <p>I'm interested in research collaborations, speaking engagements, and consulting on Quantum AI & Cybersecurity projects.</p>
            <a href="/contact" class="btn btn-primary btn-lg">Start a Conversation</a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Animated background
    function createStar() {
        const star = document.createElement('div');
        star.style.position = 'absolute';
        star.style.width = Math.random() * 2 + 1 + 'px';
        star.style.height = star.style.width;
        star.style.background = 'white';
        star.style.borderRadius = '50%';
        star.style.left = Math.random() * 100 + '%';
        star.style.top = Math.random() * 100 + '%';
        star.style.opacity = Math.random() * 0.5 + 0.5;
        star.style.animation = 'twinkle 3s infinite';
        document.querySelector('.stars').appendChild(star);
    }
    
    for (let i = 0; i < 50; i++) {
        createStar();
    }
</script>
@endpush
