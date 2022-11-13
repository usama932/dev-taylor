<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('content_page_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.content-pages.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/content-pages") || request()->is("admin/content-pages/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-file c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contentPage.title') }}
                </a>
            </li>
        @endcan
        @can('what_we_do_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.what-we-dos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/what-we-dos") || request()->is("admin/what-we-dos/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.whatWeDo.title') }}
                </a>
            </li>
        @endcan
        @can('content_category_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.content-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/content-categories") || request()->is("admin/content-categories/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-sitemap c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contentCategory.title') }}
                </a>
            </li>
        @endcan
        @can('content_tag_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.content-tags.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/content-tags") || request()->is("admin/content-tags/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-tags c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contentTag.title') }}
                </a>
            </li>
        @endcan
        @can('case_study_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.case-studies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/case-studies") || request()->is("admin/case-studies/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-atlas c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.caseStudy.title') }}
                </a>
            </li>
        @endcan
        @can('knowledge_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/knowledges*") ? "c-show" : "" }} {{ request()->is("admin/knowledge-categories*") ? "c-show" : "" }} {{ request()->is("admin/knowledge-tags*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-rss c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.knowledgeManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('knowledge_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.knowledges.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/knowledges") || request()->is("admin/knowledges/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-th-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.knowledge.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('knowledge_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.knowledge-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/knowledge-categories") || request()->is("admin/knowledge-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-sitemap c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.knowledgeCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('knowledge_tag_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.knowledge-tags.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/knowledge-tags") || request()->is("admin/knowledge-tags/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-tags c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.knowledgeTag.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('team_member_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.team-members.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/team-members") || request()->is("admin/team-members/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.teamMember.title') }}
                </a>
            </li>
        @endcan
        @can('company_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.companies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/companies") || request()->is("admin/companies/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.company.title') }}
                </a>
            </li>
        @endcan
        @can('setting_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/locations*") ? "c-show" : "" }} {{ request()->is("admin/navigationmenus*") ? "c-show" : "" }} {{ request()->is("admin/menuitems*") ? "c-show" : "" }} {{ request()->is("admin/sliders*") ? "c-show" : "" }} {{ request()->is("admin/slides*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.setting.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('location_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.locations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/locations") || request()->is("admin/locations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-map-marker c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.location.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('navigationmenu_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.navigationmenus.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/navigationmenus") || request()->is("admin/navigationmenus/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-th-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.navigationmenu.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('menuitem_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.menuitems.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/menuitems") || request()->is("admin/menuitems/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.menuitem.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('slider_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sliders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-th-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.slider.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('slide_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.slides.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/slides") || request()->is("admin/slides/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.slide.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('page_custom_field_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.page-custom-fields.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/page-custom-fields") || request()->is("admin/page-custom-fields/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.pageCustomField.title') }}
                </a>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>