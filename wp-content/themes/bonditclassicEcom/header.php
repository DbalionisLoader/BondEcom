	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<header class="site-header">
			<div class="container">
				<div class="header_left">
					<div class="header_logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">
							<svg width="221" height="62" viewBox="0 0 221 62" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M155.705 50.1258C155.705 50.1258 176.861 50.7681 184.138 48.8183C191.416 46.8684 200.513 47.6713 205.947 41.1794C211.405 34.6876 208.84 30.6044 207.44 26.8653C206.041 23.1262 211.569 20.3964 197.364 17.139C183.135 13.8586 167.601 11.4271 164.639 11.7482C161.653 12.0694 156.708 14.6845 156.708 14.6845C156.708 14.6845 163.472 28.9757 155.705 50.1258Z" fill="white"></path>
								<path d="M57.6756 39.1897C57.6756 39.8799 57.1607 40.4223 56.5562 40.4223H47.1302C46.5033 40.4223 46.0107 39.8553 46.0107 39.1897V27.7761C46.0107 27.0859 46.5033 26.5436 47.1302 26.5436H56.5562C57.1831 26.5436 57.6756 27.0859 57.6756 27.7761V39.1897ZM61.9073 23.4375H41.8911C39.0924 23.4375 36.8311 25.311 36.8311 27.6036V39.3622C36.8311 41.6548 39.0924 43.5283 41.8911 43.5283H61.9073C64.6835 43.5283 66.9673 41.6795 66.9673 39.3622V27.6036C66.9673 25.311 64.7059 23.4375 61.9073 23.4375Z" fill="black"></path>
								<path d="M22.2351 39.2903C22.2351 39.9648 21.7287 40.4947 21.0842 40.4947H11.3938C10.7493 40.4947 10.2429 39.9407 10.2429 39.2903V28.1367C10.2429 27.4622 10.7493 26.9322 11.3938 26.9322H21.0842C21.7287 26.9322 22.2351 27.4622 22.2351 28.1367V39.2903ZM26.6085 23.8969H14.4781C12.7058 23.8969 11.1175 24.5955 10.1968 25.6796V16.7423H0C0.667513 16.7423 0.59846 19.5126 0.59846 19.5126V39.6757C0.59846 42.3015 0 43.4819 0 43.4819H9.73649L10.1968 41.8679V41.7474C11.1406 42.8314 12.7058 43.53 14.4781 43.53H26.6085C29.4857 43.53 31.8105 41.7233 31.8105 39.4589V27.9681C31.8105 25.7278 29.4857 23.8969 26.6085 23.8969Z" fill="black"></path>
								<path d="M128.703 39.2901C128.703 39.9647 128.197 40.4946 127.553 40.4946H117.87C117.249 40.4946 116.72 39.9406 116.72 39.2901V28.1366C116.72 27.4621 117.226 26.9321 117.87 26.9321H127.553C128.197 26.9321 128.703 27.4621 128.703 28.1366V39.2901ZM138.341 19.5125C138.341 19.5125 138.272 16.7422 138.939 16.7422H128.772V25.6795C127.829 24.6195 126.265 23.8968 124.471 23.8968H112.35C109.474 23.8968 107.151 25.7276 107.151 27.968V39.4588C107.151 41.6991 109.474 43.5299 112.35 43.5299H124.471C126.265 43.5299 127.829 42.8313 128.772 41.7473V41.8678L129.232 43.4818H138.962C138.962 43.4818 138.364 42.3014 138.364 39.6756V19.5125H138.341Z" fill="black"></path>
								<path d="M101.311 40.8871L101.219 27.7812C101.219 25.4859 98.9027 23.6348 96.0358 23.6348H84.5226C82.7566 23.6348 81.1741 24.3505 80.2338 25.4612V25.3131L79.7751 23.6348H70.0967C70.0967 23.6348 70.693 24.8688 70.693 27.5344V40.8871C70.693 40.8871 70.7618 43.7254 70.0967 43.7254H80.9219C80.2568 43.7254 80.3256 40.8871 80.3256 40.8871V27.954C80.3256 27.2629 80.8301 26.7199 81.4723 26.7199H90.5544C91.1966 26.7199 91.7012 27.2876 91.7012 27.954V40.8871C91.7012 40.8871 91.77 43.7254 91.1049 43.7254H101.907C101.242 43.7501 101.311 40.8871 101.311 40.8871Z" fill="black"></path>
								<path d="M181.239 20.2393V19.893L191.653 18.831V23.6791H201.163V27.3499H191.653V38.8006C191.653 39.2162 192.001 39.5625 192.419 39.5625H203.32L202.554 43.2332H186.876C183.768 43.2332 181.263 41.317 181.263 38.9392V27.3268H175.928V23.6561H181.263V20.2393H181.239ZM162.545 40.2089V26.7265C162.569 25.6876 162.429 24.6026 162.244 24.441L162.337 23.6791H173.075V40.2089C173.052 41.2478 173.191 42.3328 173.377 42.4944L173.284 43.2563H162.337V42.4714L162.244 42.4944C162.429 42.3098 162.569 41.2247 162.545 40.2089ZM162.545 22.1785V16.7994H173.052V22.5941H162.545V22.1785ZM73.6672 0.52362C94.6575 2.37052 156.422 9.66578 156.422 31.2745C156.422 52.3985 97.4407 59.8322 75.1748 61.8869C176.601 63.0181 207.935 47.8274 217.584 38.5005C222.107 33.9756 222.501 27.9039 216.563 22.3171C206.242 12.5285 173.933 -3.05475 73.6672 0.52362Z" fill="#0082CA"></path>
							</svg>
						</a>
					</div>
					<div class="header_hamburger">
						<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
							<g clip-path="url(#clip0_14316_102)">
								<path d="M5.33203 10.667H26.6654" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M5.33203 21.333H26.6654" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
							<defs>
								<clipPath id="clip0_14316_102">
									<rect width="32" height="32" fill="white"></rect>
								</clipPath>
							</defs>
						</svg>
					</div>

				</div>
				<div class="header_right">
					<div class="header_top">
						<div class="audience_switcher">
							<!--  <button class="audience-switcher_option" type="button" data-audience="trade" aria-pressed="false">Trade</button> -->
							<button class="audience-switcher_option" type="button" data-audience="consumer" aria-pressed="true">Consumer</button>
						</div>
						<div class="header_stocklist-btn" data-audience="consumer">
							<a href="" class="btn btn-primary" href="/">
								<span class="btn__text">Find a stockist</span>
							</a>
						</div>
						<!--	<div class="header_login-btn" data-audience="trade">
							<a href="/" class="btn btn--primary header__reseller-btn">
								<span class="btn__text">Login / Register</span>
							</a>
						</div> -->
					</div>

					<div class="header_main">
						<div class="header_menu">
							<?php
							wp_nav_menu(
								[
									'theme_location' => 'primary',
									'container'      => false,
									'menu_class' => 'header_menu',
									'walker' => new Walker_Basic_Nav(),
									'items_wrap' => '%3$s',
									'fallback_cb'        => false,
								]
							);
							?>
						</div>
						<div class="header_icons">
							<a href="/account" title="">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
									<circle cx="10" cy="6.5" r="2.75" stroke="currentColor" stroke-width="var(--icon-stroke-width)"></circle>
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="m5.172 14.591-.437.786a.588.588 0 0 0 .514.873h9.502a.588.588 0 0 0 .514-.873l-.437-.786a5.523 5.523 0 0 0-9.656 0"></path>
								</svg>
							</a>
							<a href="/cart">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none">
									<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="var(--icon-stroke-width)" d="M3.392 6.875h13.216v8.016c0 .567-.224 1.112-.624 1.513-.4.402-.941.627-1.506.627H5.522a2.13 2.13 0 0 1-1.506-.627 2.15 2.15 0 0 1-.624-1.513zM8.818 2.969h2.333c.618 0 1.211.247 1.649.686a2.35 2.35 0 0 1 .683 1.658v1.562H6.486V5.313c0-.622.246-1.218.683-1.658a2.33 2.33 0 0 1 1.65-.686"></path>
								</svg>
							</a>
							<button type="button" class="header_search-btn" aria-label="Search">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
									<circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"></circle>
									<path d="M16 16L20 20" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
								</svg>
							</button>
						</div>
					</div>
				</div>

			</div>
		</header>