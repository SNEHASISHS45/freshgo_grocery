<div class="view-enter tracking-page">
    <div class="tracking-map">
        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=600" alt="Map">
        <div class="tracking-rider" id="riderPosition" style="top: 35%; left: 40%;">
            <div class="tracking-rider-ping"></div>
            <div class="tracking-rider-icon">
                <span class="material-symbols-outlined filled">pedal_bike</span>
            </div>
        </div>
    </div>

    <header class="tracking-header">
        <div class="tracking-header-left">
            <a href="?page=home" class="back-btn">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            <div>
                <h1 class="tracking-order">Order #FJ-921</h1>
                <p class="tracking-eta">Estimated: 14:45</p>
            </div>
        </div>
        <a href="?page=support" class="tracking-support-btn">
            <span class="material-symbols-outlined">support_agent</span>
        </a>
    </header>

    <div class="tracking-content">
        <div class="tracking-card">
            <div class="tracking-handle"></div>
            
            <div class="tracking-status">
                <div class="tracking-status-left">
                    <div class="tracking-status-icon">
                        <span class="material-symbols-outlined" id="statusIcon" style="font-size: 28px;">pedal_bike</span>
                    </div>
                    <div>
                        <p class="tracking-status-label">Order Status</p>
                        <h2 class="tracking-status-title" id="statusTitle">Picked Up</h2>
                    </div>
                </div>
                <div class="tracking-status-right">
                    <p class="tracking-arrive-label">Arriving in</p>
                    <p class="tracking-arrive-time" id="arriveTime">8 min</p>
                </div>
            </div>

            <div class="tracking-progress">
                <div class="tracking-progress-header">
                    <span>Logistics Path</span>
                    <span id="progressPercent">45%</span>
                </div>
                <div class="tracking-progress-bar">
                    <div class="tracking-progress-fill" id="progressFill" style="width: 45%;"></div>
                </div>
            </div>

            <div class="tracking-driver">
                <div class="tracking-driver-avatar">
                    <img src="https://picsum.photos/seed/courier/200/200" alt="Driver">
                    <div class="tracking-driver-online"></div>
                </div>
                <div class="tracking-driver-info">
                    <p class="tracking-driver-name">Marcus T.</p>
                    <p class="tracking-driver-meta">E-Bike • ★ 4.95</p>
                </div>
                <div class="tracking-driver-actions">
                    <button class="tracking-action-btn chat">
                        <span class="material-symbols-outlined" style="font-size: 20px;">chat_bubble</span>
                    </button>
                    <button class="tracking-action-btn call">
                        <span class="material-symbols-outlined" style="font-size: 20px;">call</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let trackingProgress = 45;

function updateTracking() {
    trackingProgress = Math.min(100, trackingProgress + 1);
    
    const progressFill = document.getElementById('progressFill');
    const progressPercent = document.getElementById('progressPercent');
    const statusTitle = document.getElementById('statusTitle');
    const statusIcon = document.getElementById('statusIcon');
    const arriveTime = document.getElementById('arriveTime');
    const rider = document.getElementById('riderPosition');
    
    progressFill.style.width = trackingProgress + '%';
    progressPercent.textContent = trackingProgress + '%';
    
    const minsLeft = Math.max(1, Math.floor((100 - trackingProgress) / 8));
    arriveTime.textContent = minsLeft + ' min';
    
    // Update status based on progress
    if (trackingProgress < 40) {
        statusTitle.textContent = 'Preparing';
        statusIcon.textContent = 'lunch_dining';
    } else if (trackingProgress < 70) {
        statusTitle.textContent = 'Picked Up';
        statusIcon.textContent = 'pedal_bike';
    } else if (trackingProgress < 95) {
        statusTitle.textContent = 'Nearby';
        statusIcon.textContent = 'distance';
    } else {
        statusTitle.textContent = 'Delivered';
        statusIcon.textContent = 'task_alt';
    }
    
    // Move rider
    rider.style.left = (40 + (trackingProgress - 45) * 0.5) + '%';
    rider.style.top = (35 - (trackingProgress - 45) * 0.2) + '%';
    
    if (trackingProgress < 100) {
        setTimeout(updateTracking, 1000);
    }
}

setTimeout(updateTracking, 1000);
</script>
