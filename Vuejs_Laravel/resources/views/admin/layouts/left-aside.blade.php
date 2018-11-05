<aside id="sidebar-left" class="sidebar-left">

		<div class="sidebar-header">
			<div class="sidebar-title">
				Navigation
			</div>
			<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>
		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">
					<ul class="nav nav-main">
						<li>
							<a href="index.html">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Trang chủ</span>
							</a>
						</li>
						<h5 style="margin-left: 20px; ">Quản lý</h5>
						<li class="{{ \Request::route()->getName() == 'sinhvien.danhsach' ? 'nav-active nav-expanded' : null }}">
							<a href="{{ route('sinhvien.danhsach') }}">
								<i class="fa fa-user-graduate" aria-hidden="true"></i>
								<span>Sinh viên</span>
							</a>
						</li>
						<li class="{{ \Request::route()->getName() == 'giangvien.danhsach' ? 'nav-active nav-expanded' : null }}">
							<a href="{{ route('giangvien.danhsach') }}">

								<i class="fa fa-chalkboard-teacher" aria-hidden="true"></i>
								<span>Giảng viên</span>
							</a>
						</li>
						<li class="{{ \Request::route()->getName() == 'nganh.danhsach' ? 'nav-active nav-expanded' : null }}">
							<a href="{{ route('nganh.danhsach') }}">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Ngành</span>
							</a>
						</li>
						<li class="{{ \Request::route()->getName() == 'detai.danhsach' ? 'nav-active nav-expanded' : null }}">
							<a href="{{ route('detai.danhsach') }}">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Đề tài</span>
							</a>
						</li>
						<li class="{{ \Request::route()->getName() == 'dangki.danhsach' ? 'nav-active nav-expanded' : null }}">
							<a href="{{ route('dangki.danhsach') }}">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Danh sách đăng kí</span>
							</a>
						</li>
						<li class="{{ \Request::route()->getName() == 'kehoach.danhsach' ? 'nav-active nav-expanded' : null }}">
							<a href="{{ route('kehoach.danhsach') }}">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Kế hoạch</span>
							</a>
						</li>
						<li class="{{ \Request::route()->getName() == 'nguoidung.danhsach' ? 'nav-active nav-expanded' : null}}">
							<a href="{{ route('nguoidung.danhsach') }}">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Người dùng</span>
							</a>
						</li>
						<h5 style="margin-left: 20px; ">Chức năng</h5>
						<li>
							<a href="index.html">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Quyền</span>
							</a>
						</li>
						
						<li>
							<a href="">
								<i class="fa fa-home" aria-hidden="true"></i>
								<span>Thoát</span>
							</a>
						</li>
						</li>
						<li class="nav-parent">
							<a>
								<i class="fa fa-align-left" aria-hidden="true"></i>
								<span>Menu Levels</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a>First Level</a>
								</li>
								<li class="nav-parent">
									<a>Second Level</a>
									<ul class="nav nav-children">
										<li class="nav-parent">
											<a>Third Level</a>
											<ul class="nav nav-children">
												<li>
													<a>Third Level Link #1</a>
												</li>
												<li>
													<a>Third Level Link #2</a>
												</li>
											</ul>
										</li>
										<li>
											<a>Second Level Link #1</a>
										</li>
										<li>
											<a>Second Level Link #2</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						
					</ul>
				</nav>	
			</div>

		</div>
	</aside>