(function () {
	'use strict';

	if (!window.BRSElementorPreviewSizes) {
		return;
	}

	const widths = window.BRSElementorPreviewSizes;

	function getPreviewWrapper() {
		return document.querySelector('#elementor-preview-responsive-wrapper');
	}

	function getCurrentDevice() {
		const body = document.body;

		if (body.classList.contains('elementor-device-mobile')) {
			return 'mobile';
		}

		if (body.classList.contains('elementor-device-tablet')) {
			return 'tablet';
		}

		if (body.classList.contains('elementor-device-desktop')) {
			return 'desktop';
		}

		return null;
	}

	function applyPreviewWidth() {
		const wrapper = getPreviewWrapper();
		const device = getCurrentDevice();

		if (!wrapper || !device) {
			return;
		}

		if (device === 'mobile') {
			wrapper.style.width = widths.mobile + 'px';
			wrapper.style.maxWidth = '100%';
			return;
		}

		if (device === 'tablet') {
			wrapper.style.width = widths.tablet + 'px';
			wrapper.style.maxWidth = '100%';
			return;
		}

		wrapper.style.width = '';
		wrapper.style.maxWidth = '';
	}

	function init() {
		applyPreviewWidth();

		const observer = new MutationObserver(function () {
			window.requestAnimationFrame(applyPreviewWidth);
		});

		observer.observe(document.body, {
			attributes: true,
			attributeFilter: ['class'],
			childList: true,
			subtree: true
		});

		document.addEventListener('click', function () {
			window.setTimeout(applyPreviewWidth, 50);
		});
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();