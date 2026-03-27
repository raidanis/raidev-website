

<?php $__env->startSection('title', 'Portfolio - Raid Anis Kerkatou'); ?>

<?php $__env->startSection('content'); ?>
<section class="page-header">
    <div class="container">
        <h1>Portfolio</h1>
        <p class="page-subtitle">Engineering Projects & Technical Work</p>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="portfolio-filter">
    <div class="container">
        <div class="filter-buttons">
            <button class="filter-btn active" onclick="filterProjects('all')">All</button>
            <button class="filter-btn" onclick="filterProjects('quantum')">Quantum ML</button>
            <button class="filter-btn" onclick="filterProjects('vision')">Computer Vision</button>
            <button class="filter-btn" onclick="filterProjects('web')">Web Dev</button>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="portfolio-section">
    <div class="container">
        <div class="portfolio-grid">
            <!-- Quantum ML Projects -->
            <div class="portfolio-item quantum" data-category="quantum">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">⚛️</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Quantum ML</span>
                        <h3>QNN Classifier for NSL-KDD</h3>
                        <p>Quantum neural network achieving 97.3% accuracy on intrusion detection benchmark. Includes circuit optimization and hybrid architecture.</p>
                        <div class="portfolio-tech">
                            <span>PyTorch</span>
                            <span>PennyLane</span>
                            <span>Qiskit</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item quantum" data-category="quantum">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">⚛️</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Quantum ML</span>
                        <h3>QSVM Pipeline</h3>
                        <p>Complete quantum support vector machine pipeline with custom kernel functions. Benchmarked against classical methods on cybersecurity datasets.</p>
                        <div class="portfolio-tech">
                            <span>PennyLane</span>
                            <span>Scikit-learn</span>
                            <span>NumPy</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item quantum" data-category="quantum">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">⚛️</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Quantum ML</span>
                        <h3>QCNN DDoS Detector</h3>
                        <p>Quantum convolutional neural network for detecting distributed denial-of-service attacks with real-time inference capabilities.</p>
                        <div class="portfolio-tech">
                            <span>Qiskit</span>
                            <span>TensorFlow</span>
                            <span>Keras</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Computer Vision Projects -->
            <div class="portfolio-item vision" data-category="vision">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">👁️</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Dataset</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Computer Vision</span>
                        <h3>FloodNet Segmentation</h3>
                        <p>Semantic segmentation of flood damage using satellite imagery. U-Net and DeepLab models with public dataset (5,000+ images).</p>
                        <div class="portfolio-tech">
                            <span>PyTorch</span>
                            <span>U-Net</span>
                            <span>DeepLab</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item vision" data-category="vision">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">👁️</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Computer Vision</span>
                        <h3>YOLO Damage Detection</h3>
                        <p>Custom YOLO v5 model for detecting structural damage in building images. Achieves 92% mAP with real-time inference (30 FPS).</p>
                        <div class="portfolio-tech">
                            <span>PyTorch</span>
                            <span>YOLO v5</span>
                            <span>OpenCV</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item vision" data-category="vision">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">👁️</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Computer Vision</span>
                        <h3>Image Classification Pipeline</h3>
                        <p>End-to-end CNN pipeline with data augmentation, transfer learning, and model deployment. Trained on 100K+ custom dataset.</p>
                        <div class="portfolio-tech">
                            <span>TensorFlow</span>
                            <span>ResNet</span>
                            <span>Docker</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Web Development Projects -->
            <div class="portfolio-item web" data-category="web">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">🌐</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Web Development</span>
                        <h3>School Management System</h3>
                        <p>Full-stack web application for school administration. Features student management, grading, attendance, and reporting systems.</p>
                        <div class="portfolio-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item web" data-category="web">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">🌐</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Web Development</span>
                        <h3>AI Model Dashboard</h3>
                        <p>Interactive web dashboard for monitoring and visualizing ML model performance. Real-time metrics, predictions, and analytics.</p>
                        <div class="portfolio-tech">
                            <span>Laravel</span>
                            <span>Chart.js</span>
                            <span>DataTables</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-item web" data-category="web">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <div class="placeholder-image">🌐</div>
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-tag">Web Development</span>
                        <h3>Research Lab Website</h3>
                        <p>Professional lab website showcasing research work, publications, and team members. Built with Laravel and modern responsive design.</p>
                        <div class="portfolio-tech">
                            <span>Laravel</span>
                            <span>Blade</span>
                            <span>Responsive Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    function filterProjects(category) {
        // Update active button
        document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
        event.target.classList.add('active');
        
        // Filter projects
        const items = document.querySelectorAll('.portfolio-item');
        items.forEach(item => {
            if (category === 'all' || item.dataset.category === category) {
                item.style.display = 'block';
                setTimeout(() => item.classList.add('active'), 10);
            } else {
                item.classList.remove('active');
                setTimeout(() => item.style.display = 'none', 300);
            }
        });
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\RAIdev\resources\views/portfolio.blade.php ENDPATH**/ ?>