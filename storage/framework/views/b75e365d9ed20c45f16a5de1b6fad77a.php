

<?php $__env->startSection('title', 'Research - Raid Anis Kerkatou'); ?>

<?php $__env->startSection('content'); ?>
<section class="page-header">
    <div class="container">
        <h1>Research</h1>
        <p class="page-subtitle">Publications, Projects & Ongoing Work in Quantum AI & Cybersecurity</p>
    </div>
</section>

<!-- Navigation Tabs -->
<section class="research-nav">
    <div class="container">
        <div class="research-tabs">
            <button class="tab-btn active" onclick="showTab('publications')">Publications</button>
            <button class="tab-btn" onclick="showTab('projects')">Projects</button>
            <button class="tab-btn" onclick="showTab('ongoing')">Ongoing Work</button>
        </div>
    </div>
</section>

<!-- Publications Tab -->
<section class="tab-content active" id="publications">
    <div class="container">
        <h2 class="section-title">Publications</h2>
        
        <div class="publications-list">
            <!-- Publication 1 -->
            <div class="publication-card">
                <div class="pub-header">
                    <h3>Hybrid Quantum Neural Network for Intrusion Detection Systems</h3>
                    <div class="pub-meta">
                        <span class="pub-year">2025</span>
                        <span class="pub-status">IEEE Transactions on Quantum Engineering</span>
                    </div>
                </div>
                <p class="pub-abstract">
                    <strong>Abstract:</strong> We propose a novel hybrid quantum-classical neural network architecture that combines variational quantum circuits 
                    with classical neural layers for intrusion detection. Our approach achieves 97.3% accuracy on NSL-KDD dataset with 40% reduction in classical 
                    computation overhead compared to baseline methods.
                </p>
                <div class="pub-details">
                    <div class="pub-detail">
                        <strong>Authors:</strong> R.A. Kerkatou, et al.
                    </div>
                    <div class="pub-detail">
                        <strong>Contribution:</strong> Novel architecture design, circuit optimization, experimental validation
                    </div>
                    <div class="pub-detail">
                        <strong>Dataset:</strong> NSL-KDD (125,973 records)
                    </div>
                    <div class="pub-detail">
                        <strong>Results:</strong> Accuracy: 97.3%, F1-Score: 0.968
                    </div>
                </div>
                <div class="pub-links">
                    <a href="#" class="btn btn-sm btn-primary">PDF</a>
                    <a href="#" class="btn btn-sm btn-secondary">DOI</a>
                    <a href="#" class="btn btn-sm btn-tertiary">GitHub</a>
                </div>
            </div>

            <!-- Publication 2 -->
            <div class="publication-card">
                <div class="pub-header">
                    <h3>Comparative Analysis: Quantum SVM vs Classical SVM for Cybersecurity</h3>
                    <div class="pub-meta">
                        <span class="pub-year">2024</span>
                        <span class="pub-status">IEEE Cybersecurity Symposium</span>
                    </div>
                </div>
                <p class="pub-abstract">
                    <strong>Abstract:</strong> Comprehensive benchmark study comparing quantum support vector machines with classical SVM, Random Forest, 
                    and Gradient Boosting on multiple cybersecurity datasets. Results demonstrate quantum advantage for high-dimensional intrusion detection tasks.
                </p>
                <div class="pub-details">
                    <div class="pub-detail">
                        <strong>Authors:</strong> R.A. Kerkatou, A. Smith, et al.
                    </div>
                    <div class="pub-detail">
                        <strong>Dataset:</strong> CIC-IDS2017 (2.8M records)
                    </div>
                    <div class="pub-detail">
                        <strong>Results:</strong> QSVM: 95.8%, SVM: 93.2%, RF: 91.5%
                    </div>
                    <div class="pub-detail">
                        <strong>Venues:</strong> 3 major conferences
                    </div>
                </div>
                <div class="pub-links">
                    <a href="#" class="btn btn-sm btn-primary">PDF</a>
                    <a href="#" class="btn btn-sm btn-secondary">DOI</a>
                    <a href="#" class="btn btn-sm btn-tertiary">GitHub</a>
                </div>
            </div>

            <!-- Publication 3 -->
            <div class="publication-card">
                <div class="pub-header">
                    <h3>FloodNet: A Comprehensive Dataset for Flood Damage Assessment using Satellite Imagery</h3>
                    <div class="pub-meta">
                        <span class="pub-year">2023</span>
                        <span class="pub-status">IEEE Geoscience and Remote Sensing Letters</span>
                    </div>
                </div>
                <p class="pub-abstract">
                    <strong>Abstract:</strong> We introduce FloodNet, a large-scale dataset with 5,000+ satellite images for flood damage assessment. 
                    Includes semantic segmentation annotations and baseline models using U-Net and DeepLab with state-of-the-art results.
                </p>
                <div class="pub-details">
                    <div class="pub-detail">
                        <strong>Authors:</strong> R.A. Kerkatou, International Disaster Team
                    </div>
                    <div class="pub-detail">
                        <strong>Dataset:</strong> FloodNet (5,000+ images, satellite resolution)
                    </div>
                    <div class="pub-detail">
                        <strong>Results:</strong> U-Net IoU: 0.89, DeepLab IoU: 0.92
                    </div>
                    <div class="pub-detail">
                        <strong>Impact:</strong> 200+ citations, public dataset
                    </div>
                </div>
                <div class="pub-links">
                    <a href="#" class="btn btn-sm btn-primary">PDF</a>
                    <a href="#" class="btn btn-sm btn-secondary">DOI</a>
                    <a href="#" class="btn btn-sm btn-tertiary">Dataset</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Tab -->
<section class="tab-content" id="projects">
    <div class="container">
        <h2 class="section-title">Research Projects</h2>
        
        <div class="projects-grid">
            <div class="project-card">
                <h3>Hybrid QNN for Intrusion Detection (NSL-KDD)</h3>
                <p class="project-status">Completed</p>
                <p>Developed a novel quantum neural network that combines variational quantum circuits with classical dense layers. Achieved 97.3% accuracy with significant computational efficiency gains.</p>
                <div class="project-meta">
                    <span><strong>Tech:</strong> PennyLane, PyTorch, Qiskit</span>
                    <span><strong>Duration:</strong> 12 months</span>
                </div>
                <a href="#" class="learn-more">View Details →</a>
            </div>

            <div class="project-card">
                <h3>QSVM with Quantum Kernel Methods</h3>
                <p class="project-status">Completed</p>
                <p>Implemented quantum support vector machines using PennyLane with custom quantum kernels. Benchmarked against classical SVM on multiple datasets showing quantum advantage.</p>
                <div class="project-meta">
                    <span><strong>Tech:</strong> PennyLane, Scikit-learn</span>
                    <span><strong>Duration:</strong> 8 months</span>
                </div>
                <a href="#" class="learn-more">View Details →</a>
            </div>

            <div class="project-card">
                <h3>Quantum CNN for DDoS Detection</h3>
                <p class="project-status">Completed</p>
                <p>Hybrid quantum convolutional neural network for detecting distributed denial-of-service attacks. Combines quantum feature extraction with classical CNN architecture.</p>
                <div class="project-meta">
                    <span><strong>Tech:</strong> Qiskit, TensorFlow</span>
                    <span><strong>Duration:</strong> 10 months</span>
                </div>
                <a href="#" class="learn-more">View Details →</a>
            </div>

            <div class="project-card">
                <h3>FloodNet Segmentation Models</h3>
                <p class="project-status">Completed</p>
                <p>Deep learning models for semantic segmentation of flood damage using satellite imagery. Deployed U-Net and DeepLab v3+ with public dataset release.</p>
                <div class="project-meta">
                    <span><strong>Tech:</strong> PyTorch, U-Net, DeepLab</span>
                    <span><strong>Duration:</strong> 9 months</span>
                </div>
                <a href="#" class="learn-more">View Details →</a>
            </div>

            <div class="project-card">
                <h3>Quantum Random Forest IDS</h3>
                <p class="project-status">Completed</p>
                <p>Quantum-enhanced random forest algorithm for intrusion detection combining quantum feature encoding with ensemble methods.</p>
                <div class="project-meta">
                    <span><strong>Tech:</strong> PennyLane, Scikit-learn</span>
                    <span><strong>Duration:</strong> 7 months</span>
                </div>
                <a href="#" class="learn-more">View Details →</a>
            </div>

            <div class="project-card">
                <h3>YOLO v5 Custom Damage Detector</h3>
                <p class="project-status">Completed</p>
                <p>Custom YOLO v5 model trained for detecting structural damage in building images. Achieves 92% mAP with real-time inference.</p>
                <div class="project-meta">
                    <span><strong>Tech:</strong> PyTorch, YOLO, OpenCV</span>
                    <span><strong>Duration:</strong> 5 months</span>
                </div>
                <a href="#" class="learn-more">View Details →</a>
            </div>
        </div>
    </div>
</section>

<!-- Ongoing Work Tab -->
<section class="tab-content" id="ongoing">
    <div class="container">
        <h2 class="section-title">Ongoing & Future Work</h2>
        
        <div class="ongoing-grid">
            <div class="ongoing-card">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 75%"></div>
                </div>
                <h3>Hybrid Quantum Random Forest (HQRF-IDS)</h3>
                <p>Developing an advanced hybrid approach combining quantum randomized algorithms with classical random forest for superior intrusion detection.</p>
                <div class="ongoing-details">
                    <span>Expected: Q4 2026</span>
                    <span>Status: 75% Complete</span>
                </div>
            </div>

            <div class="ongoing-card">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 60%"></div>
                </div>
                <h3>Quantum Federated Learning for IDS</h3>
                <p>Exploring federated learning with quantum computing to build privacy-preserving intrusion detection systems across multiple organizations.</p>
                <div class="ongoing-details">
                    <span>Expected: Q2 2026</span>
                    <span>Status: 60% Complete</span>
                </div>
            </div>

            <div class="ongoing-card">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 45%"></div>
                </div>
                <h3>Quantum Transfer Learning Framework</h3>
                <p>Building a comprehensive framework for transfer learning in quantum machine learning to accelerate model training and deployment.</p>
                <div class="ongoing-details">
                    <span>Expected: Q3 2026</span>
                    <span>Status: 45% Complete</span>
                </div>
            </div>

            <div class="ongoing-card">
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 30%"></div>
                </div>
                <h3>Explainable Quantum AI for Cybersecurity</h3>
                <p>Developing explainability and interpretability methods for quantum machine learning models used in security applications.</p>
                <div class="ongoing-details">
                    <span>Expected: Q4 2026</span>
                    <span>Status: 30% Complete</span>
                </div>
            </div>
        </div>

        <div style="background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(138, 43, 226, 0.1)); padding: 2rem; border-radius: 1rem; border-left: 4px solid #00d4ff; margin-top: 2rem;">
            <h3>💡 Interested in Collaboration?</h3>
            <p>If any of these projects align with your research interests, I'd love to discuss potential collaborations, partnerships, or joint funding proposals.</p>
            <a href="/contact" class="btn btn-primary">Get in Touch</a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    function showTab(tabName) {
        // Hide all tabs
        const tabs = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => tab.classList.remove('active'));
        
        // Remove active class from buttons
        const buttons = document.querySelectorAll('.tab-btn');
        buttons.forEach(btn => btn.classList.remove('active'));
        
        // Show selected tab
        document.getElementById(tabName).classList.add('active');
        event.target.classList.add('active');
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAIdev\resources\views/research.blade.php ENDPATH**/ ?>