document.addEventListener('DOMContentLoaded', function () {

    console.log('Dashboard Loaded');

        initRevenueChart();
        initPatientChart();
        initChatWidget();
        initSidebarSearch();

    const menuItems = document.querySelectorAll('.sidebar-menu a');

    menuItems.forEach(item => {

        item.addEventListener('click', function(){

            menuItems.forEach(x =>
                x.classList.remove('active')
            );

            this.classList.add('active');

        });

    });


});

/* Load page content via AJAX */

$(document).on('click', '.load-page', function (e) {
    e.preventDefault();

    let url = $(this).data('url');

    console.log("Loading:", url); // debug

    $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
            $('#content-area').html(response);
            initRevenueChart();  //dashboard chart
            initPatientChart();   //for dashboard chart
            initPatientsTable();  //patient datatable
            initThemeColor();   //Theme color change
        },
        error: function (xhr) {
            console.log(xhr.responseText);
            alert('Page load failed');
        }
    });
});

//datatable example
$(document).ready(function () {

    $('#patientsTable').DataTable({
  pageLength: 10,
  lengthMenu: [5, 10, 25, 50],
  order: [[4, 'desc']],
  scrollY: '200px',     // fixed height for the scrolling body — adjust to taste
  scrollX: false,        // horizontal scroll if columns overflow
  scrollCollapse: true, // shrink the scroll area if there's less content than 320px
  paging: false,
  language: { search: '',
            searchPlaceholder: 'Search patients...'}
});
});

//Due to ajax calling-need to initialize
function initPatientsTable() {

    if ($.fn.DataTable.isDataTable('#patientsTable')) {
        $('#patientsTable').DataTable().destroy();
    }

    $('#patientsTable').DataTable({
        pageLength: 10,
        responsive: true
    });
}





//chart js
function initRevenueChart() {

    const canvas = document.getElementById('revenueChart');

    if (!canvas) return;
new Chart(canvas, {
  type: 'line',
  data: {
    labels: ['Jan','Feb','Mar','Apr','May','Jun'],
    datasets: [{
      label: 'Revenue',
      data: [68000,74000,81000,95000,110000,125000],
      borderColor: '#0d6efd',
      backgroundColor: 'rgba(79,142,247,0.12)',
      borderWidth: 2.5,
      pointBackgroundColor: '#0d6efd',
      pointBorderColor: '#13161e',
      pointBorderWidth: 2,
      pointRadius: 4,
      pointHoverRadius: 6,
      fill: true,
      tension: 0.35
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
      legend: { display: false },
      tooltip: {
        backgroundColor: '#1a1e28',
        titleColor: '#e8eaf2',
        bodyColor: '#8891aa',
        borderColor: '#2a2f40',
        borderWidth: 1,
        padding: 10,
        callbacks: { label: c => '$' + c.parsed.y.toLocaleString() }
      }
    },
    scales: {
      x: { grid: { display: false }, ticks: { color: '#8891aa', font: { size: 11 } } },
      y: { grid: { color: '#2a2f40' }, ticks: { color: '#8891aa', font: { size: 11 }, callback: v => '$' + (v/1000) + 'k' } }
    }
  }
});
}

//Patient growth chart

function initPatientChart() {

    const patientCanvas = document.getElementById('patientLegend');
    if (!patientCanvas) return;

const patientData = [450, 620, 180, 95];
const patientLabels = ['New registrations', 'Returning patients', 'Referrals', 'Others'];
const patientColors = ['#349ed3', '#0d6efd', '#36699c', '#fbbf24'];
const total = patientData.reduce((a, b) => a + b, 0);

patientCanvas.innerHTML = patientLabels.map((label, i) => {
  const pct = ((patientData[i] / total) * 100).toFixed(0);
  return `<span><span class="legend-dot" style="background:${patientColors[i]}"></span>${label} ${pct}%</span>`;
}).join('');

const centerTextPlugin = {
  id: 'centerText',
  afterDraw(chart) {
    const { ctx, chartArea: { left, top, width, height } } = chart;
    ctx.save();
    const cx = left + width / 2;
    const cy = top + height / 2;
    ctx.font = '600 26px Inter, sans-serif';
    ctx.fillStyle = '#e8eaf2';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'bottom';
    ctx.fillText(total.toLocaleString(), cx, cy + 4);
    ctx.font = '400 11px Inter, sans-serif';
    ctx.fillStyle = '#8891aa';
    ctx.textBaseline = 'top';
    ctx.fillText('Total patients', cx, cy + 6);
    ctx.restore();
  }
};

new Chart(document.getElementById('patientChart'), {
  type: 'doughnut',
  data: {
    labels: patientLabels,
    datasets: [{
      data: patientData,
      backgroundColor: patientColors,
      borderColor: '#13161e',
      borderWidth: 3,
      hoverOffset: 6
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    cutout: '72%',
    plugins: {
      legend: { display: false },
      tooltip: {
        backgroundColor: '#1a1e28',
        titleColor: '#e8eaf2',
        bodyColor: '#8891aa',
        borderColor: '#2a2f40',
        borderWidth: 1,
        padding: 10,
        callbacks: {
          label: (c) => {
            const pct = ((c.parsed / total) * 100).toFixed(1);
            return c.label + ': ' + c.parsed.toLocaleString() + ' (' + pct + '%)';
          }
        }
      }
    }
  },
  plugins: [centerTextPlugin]
});

}

// CHATBOT WIDGET

function initChatWidget() {
  const widget = document.getElementById('chatWidget');
  if (!widget) return;
  const launcher = document.getElementById('chatLauncher');
  const closeBtn = document.getElementById('closeBtn');
  const body = document.getElementById('chatBody');
  const input = document.getElementById('chatInput');
  const sendBtn = document.getElementById('sendBtn');
  const quickReplies = document.getElementById('quickReplies');
  const panel = widget.querySelector('.chat-panel');

  function toggleWidget(open){
    const isOpen = open !== undefined ? open : !widget.classList.contains('open');
    widget.classList.toggle('open', isOpen);
    launcher.setAttribute('aria-expanded', String(isOpen));
    panel.setAttribute('aria-hidden', String(!isOpen));
    if(isOpen){
      setTimeout(() => input.focus(), 220);
    }
  }

  launcher.addEventListener('click', () => toggleWidget());
  closeBtn.addEventListener('click', () => toggleWidget(false));

  // auto-grow textarea
  input.addEventListener('input', () => {
    input.style.height = 'auto';
    input.style.height = Math.min(input.scrollHeight, 90) + 'px';
    sendBtn.disabled = input.value.trim().length === 0;
  });

  input.addEventListener('keydown', (e) => {
    if(e.key === 'Enter' && !e.shiftKey){
      e.preventDefault();
      sendMessage();
    }
  });

  sendBtn.addEventListener('click', sendMessage);

  quickReplies.addEventListener('click', (e) => {
    const btn = e.target.closest('.quick-reply');
    if(!btn) return;
    addMessage(btn.dataset.msg, 'user');
    quickReplies.remove();
    botRespond(btn.dataset.msg);
  });

  function timeNow(){
    return new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  }

  function addMessage(text, who){
    const row = document.createElement('div');
    row.className = 'msg-row ' + who;

    if(who === 'bot'){
      row.innerHTML = `
        <div class="msg-avatar">
          <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
        </div>
        <div>
          <div class="msg-bubble"></div>
          <div class="msg-time">${timeNow()}</div>
        </div>`;
    } else {
      row.innerHTML = `
        <div>
          <div class="msg-bubble"></div>
          <div class="msg-time">${timeNow()}</div>
        </div>`;
    }
    row.querySelector('.msg-bubble').textContent = text;
    body.appendChild(row);
    body.scrollTop = body.scrollHeight;
  }

  function showTyping(){
    const row = document.createElement('div');
    row.className = 'typing-row';
    row.id = 'typingIndicator';
    row.innerHTML = `
      <div class="msg-avatar">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
      </div>
      <div class="typing-bubble"><span></span><span></span><span></span></div>`;
    body.appendChild(row);
    body.scrollTop = body.scrollHeight;
  }

  function removeTyping(){
    const el = document.getElementById('typingIndicator');
    if(el) el.remove();
  }

  function sendMessage(){
    const text = input.value.trim();
    if(!text) return;
    addMessage(text, 'user');
    input.value = '';
    input.style.height = 'auto';
    sendBtn.disabled = true;
    if(quickReplies.parentNode) quickReplies.remove();
    botRespond(text);
  }

  function botRespond(userText){
    showTyping();
    // Replace this block with a real API call to your backend / LLM endpoint.
    setTimeout(() => {
      removeTyping();
      addMessage(canned(userText), 'bot');
    }, 900 + Math.random() * 500);
  }

  function canned(text){
    const t = text.toLowerCase();
    if(t.includes('order')) return "I can help with that. Could you share your order number? It usually starts with #.";
    if(t.includes('pricing') || t.includes('price')) return "Our plans start at $12/month. Want me to walk you through the tiers?";
    if(t.includes('human')) return "Sure thing — connecting you with a teammate now. Average wait time is under 2 minutes.";
    return "Thanks for your message! A specific answer would go here — wire this widget up to your backend or LLM API to make replies dynamic.";
  }
}

/*---Dynamic page title  ----*/

    function setPageTitleBadge(iconClass, text) {
        const badge = document.getElementById('pageTitleBadge');
        if (!badge) return;
        badge.querySelector('.page-title-badge-icon i').className = 'bi ' + iconClass;
        document.getElementById('pageTitleBadgeText').textContent = text;

    }

    if (!window.__pageTitleBadgeBound) {
        window.__pageTitleBadgeBound = true;

        document.addEventListener('click', function (e) {
            const link = e.target.closest('.load-page');
            if (!link) return;

           const title = link.dataset.title;
            const icon = link.dataset.icon;

            setPageTitleBadge(icon, title);
        });
    }

//sweet alerts
function showSuccess(message, title = 'Success!') {
      Swal.fire({
        title: title,
        text: message,
        icon: 'success',
        confirmButtonText: 'OK',
        buttonsStyling: false,
        customClass: {
          confirmButton: 'btn btn-success px-4',
          popup: 'rounded-3'
        }
      });
    }

    function showError(message, title = 'Oops...') {
      Swal.fire({
        title: title,
        text: message,
        icon: 'error',
        confirmButtonText: 'OK',
        buttonsStyling: false,
        customClass: {
          confirmButton: 'btn btn-danger px-4',
          popup: 'rounded-3'
        }
      });
    }

//theme color change options
function initThemeColor(){
    const headerColor = document.getElementById('headerColor');
    const sidebarColor = document.getElementById('sidebarColor');
    const footerColor = document.getElementById('footerColor');
    const resetBtn = document.getElementById('resetThemeColors');

  const fontSizeInput = document.getElementById('fontSizeRange');
  const fontSizeOutput = document.getElementById('fontSizeValue');
  const fontColorInput = document.getElementById('fontColor');

    if (!headerColor || !sidebarColor || !footerColor || !resetBtn) {
        console.warn('initThemeColor: picker elements not found in DOM, skipping init.');
        return;
    }

        const selectors = {
    header: '.top-header',
    sidebar: '.sidebar',
    footer: '.footer'
  };

  const defaults = {
    header: '#000000',
    sidebar: '#000000',
    footer: '#000000',
    fontSize: '16',
    fontColor: '#eeeeee'
  };

   function applyColor(targetKey, color) {
    const els = document.querySelectorAll(selectors[targetKey]);
    els.forEach(el => {
      el.style.backgroundColor = color;
      el.style.setProperty('background-color', color, 'important');
    });
  }

 // Applies font-size / font-color to the entire page (demo scope)
  function applyFontStyle(size, color) {
    document.body.style.setProperty('font-size', size + 'px', 'important');
    document.body.style.setProperty('color', color, 'important');
  }

  // Wire up each picker
  headerColor.addEventListener('input', e => applyColor('header', e.target.value));
  sidebarColor.addEventListener('input', e => applyColor('sidebar', e.target.value));
  footerColor.addEventListener('input', e => applyColor('footer', e.target.value));

  // Font size + font color (optional — only wire up if present on this page)
  if (fontSizeInput) {
    fontSizeInput.addEventListener('input', e => {
      if (fontSizeOutput) fontSizeOutput.textContent = e.target.value;
      applyFontStyle(e.target.value, fontColorInput ? fontColorInput.value : defaults.fontColor);
    });
  }

  if (fontColorInput) {
    fontColorInput.addEventListener('input', e => {
      applyFontStyle(fontSizeInput ? fontSizeInput.value : defaults.fontSize, e.target.value);
    });
  }

  // Reset button
  resetBtn.addEventListener('click', () => {
    headerColor.value = defaults.header;
    sidebarColor.value = defaults.sidebar;
    footerColor.value = defaults.footer;
    applyColor('header', defaults.header);
    applyColor('sidebar', defaults.sidebar);
    applyColor('footer', defaults.footer);

    if (fontSizeInput) {
      fontSizeInput.value = defaults.fontSize;
      if (fontSizeOutput) fontSizeOutput.textContent = defaults.fontSize;
    }
    if (fontColorInput) fontColorInput.value = defaults.fontColor;
    applyFontStyle(defaults.fontSize, defaults.fontColor);
  });

  }


/*--- Sidebar menu search ---*/

function initSidebarSearch() {
    const searchInput = document.getElementById('sidebarSearchInput');
    if (!searchInput) {
        console.warn('initSidebarSearch: #sidebarSearchInput not found, skipping init.');
        return;
    }

    // Each top-level menu link. If/when you add submenus, give the submenu
    // <li> wrapper a `.has-submenu` class and the nested links the same
    // `.menu-text` span — this function already walks up to a item's
    // closest <li> and will reveal parent items automatically.
    const menuLinks = document.querySelectorAll('.sidebar-menu > li > a, .sidebar-menu .submenu a');

    searchInput.addEventListener('input', function (e) {
        const query = e.target.value.trim().toLowerCase();

        menuLinks.forEach(link => {
            const textEl = link.querySelector('.menu-text');
            const text = textEl ? textEl.textContent.toLowerCase() : link.textContent.toLowerCase();
            const li = link.closest('li');
            if (!li) return;

            const isMatch = query === '' || text.includes(query);
            li.style.display = isMatch ? '' : 'none';

            // If this link lives inside a submenu, make sure the parent
            // <li> (and the submenu container itself) is shown whenever
            // a child matches — keeps this future-proof for nested menus.
            if (isMatch && query !== '') {
                const parentSubmenu = link.closest('.submenu');
                if (parentSubmenu) {
                    parentSubmenu.style.display = '';
                    const parentLi = parentSubmenu.closest('li');
                    if (parentLi) parentLi.style.display = '';
                }
            }

            highlightMatch(textEl || link, query);
        });
    });

    function highlightMatch(el, query) {
        const original = el.dataset.originalText || el.textContent;
        el.dataset.originalText = original; // remember plain text across keystrokes

        if (!query) {
            el.textContent = original;
            return;
        }

        const idx = original.toLowerCase().indexOf(query);
        if (idx === -1) {
            el.textContent = original;
            return;
        }

        const before = original.slice(0, idx);
        const match = original.slice(idx, idx + query.length);
        const after = original.slice(idx + query.length);
        el.innerHTML = `${before}<mark>${match}</mark>${after}`;
    }
}

