// JavaScript Document

  var scroll = new SmoothScroll('a[href*="#"]',{
    selector: '[data-scroll]',				// スムーススクロールが有効なリンクに付ける属性
    //selectorHeader: '[data-scroll-header]',		// 固定ナビに付ける属性
    speed: 300,						// 到達するまでの総時間(ミリ秒)
    easing: 'easeInOutCubic',			// スピードの種類
    offset: 0,							// 到達場所からズラすピクセル数
    updateURL: false,					// URLを[#?]に変更するか？
    //callback: function () {}				// コールバック関数 (到達時に実行される関数)
  });
