<div
    class="side-menu__content h-full box border-transparent rounded-none xl:rounded-xl bg-gradient-to-b from-theme-1 to-theme-2 z-20 relative w-[275px] duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] overflow-hidden flex flex-col after:content-[''] after:absolute after:inset-0 after:-mr-4 after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-20rem] after:bg-no-repeat">
    <div
        class="flex-none hidden xl:flex items-center z-10 px-5 h-[65px] xl:w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] before:content-[''] before:absolute before:right-0 before:border-r before:border-dashed before:border-white/[0.15] before:h-4/6 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:hidden">
        <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4"
            href="#">
            <div
                class="transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                <div class="relative h-[18px] w-[18px] -rotate-45 [&_div]:bg-white">
                    <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                    </div>
                    <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                    <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                    </div>
                </div>
            </div>
            <div
                class="ml-3.5 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                RAZOR
            </div>
        </a>
        <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
            href="#">
            <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
        </a>
    </div>
    <div
        class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
        <ul class="scrollable">
            <!-- BEGIN: First Child -->

            @can('manage users')
                <li class="side-menu__divider">
                    DASHBOARDS
                </li>
                <li>
                    <a href="/" class="side-menu__link ">
                        <i data-tw-merge="" data-lucide="gauge-circle" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Dashboard</div>
                    </a>
                    <!-- BEGIN: Second Child -->
                    <!-- END: Second Child -->
                </li>
            @endcan
            <li class="side-menu__divider">
                DATA MASTER
            </li>
            <li>
                <a href="{{ route('kegiatan.index') }}" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="gantt-chart-square"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Kegiatan</div>
                    <div class="side-menu__link__badge">
                        4
                    </div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-file-manager-list.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="panel-right-inactive"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">File Manager List</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-file-manager-grid.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="panel-top-close"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">File Manager Grid</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-point-of-sale.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="panel-top-inactive"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Point of Sale</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-chat.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="mail-open" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Chat</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-calendar.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="calendar-range"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Calendar</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li class="side-menu__divider">
                USERS MANAGEMENT
            </li>
            <li>
                <a href="/users" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="user-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Users</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="/permissions" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="cake-slice" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Permissions</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-add-user.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="package-plus" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Add User</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li class="side-menu__divider">
                PERSONAL DASHBOARD
            </li>
            <li>
                <a href="razor-profile-overview.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="presentation" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Profile Overview</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-profile-overview-events.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="calendar-range"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Events</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-profile-overview-achievements.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="medal" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Achievements</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-profile-overview-contacts.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="tablet-smartphone"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Contacts</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-profile-overview-default.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="snail" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Default</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li class="side-menu__divider">
                GENERAL SETTINGS
            </li>
            <li>
                <a href="razor-settings.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="briefcase" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Profile Info</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-email-settings.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="mail-check"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Email Settings</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-security.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="fingerprint"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Security</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-preferences.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="radar" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Preferences</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-two-factor-authentication.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="door-open" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Two-factor Authentication</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-device-history.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="keyboard" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Device History</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-notification-settings.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="ticket" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Notification Settings</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-connected-services.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="bus-front" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Connected Services</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-social-media-links.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="podcast" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Social Media Links</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-settings-account-deactivation.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="package-x" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Account Deactivation</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li class="side-menu__divider">
                ACCOUNT
            </li>
            <li>
                <a href="razor-billing.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="percent-square"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Billing</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-invoice.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="database-zap"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Invoice</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li class="side-menu__divider">
                E-COMMERCE
            </li>
            <li>
                <a href="razor-categories.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="book-marked"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Categories</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-add-product.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="compass" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Add Product</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="javascript:;" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="table2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Products</div>
                    <i data-tw-merge="" data-lucide="chevron-down"
                        class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                </a>
                <!-- BEGIN: Second Child -->
                <ul class="hidden">
                    <li>
                        <a href="razor-product-list.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="layout-panel-top"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Product List
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                    <li>
                        <a href="razor-product-grid.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="layout-panel-left"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Product Grid
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                </ul>
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="javascript:;" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="sigma-square"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Transactions</div>
                    <i data-tw-merge="" data-lucide="chevron-down"
                        class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                </a>
                <!-- BEGIN: Second Child -->
                <ul class="hidden">
                    <li>
                        <a href="razor-transaction-list.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="divide-square"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Transaction List
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                    <li>
                        <a href="razor-transaction-detail.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="plus-square"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Transaction Detail
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                </ul>
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="javascript:;" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="file-archive"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Sellers</div>
                    <i data-tw-merge="" data-lucide="chevron-down"
                        class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                </a>
                <!-- BEGIN: Second Child -->
                <ul class="hidden">
                    <li>
                        <a href="razor-seller-list.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="file-image"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Seller List
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                    <li>
                        <a href="razor-seller-detail.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="file-box"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Seller Detail
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                </ul>
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-reviews.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="goal" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Reviews</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li class="side-menu__divider">
                AUTHENTICATIONS
            </li>
            <li>
                <a href="razor-login.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="book-key" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Login</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-register.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="book-lock" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Register</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li class="side-menu__divider">
                COMPONENTS
            </li>
            <li>
                <a href="javascript:;" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="layout-panel-left"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Table</div>
                    <i data-tw-merge="" data-lucide="chevron-down"
                        class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                </a>
                <!-- BEGIN: Second Child -->
                <ul class="hidden">
                    <li>
                        <a href="razor-regular-table.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="flip-vertical"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Regular Table
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                    <li>
                        <a href="razor-tabulator.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="flip-horizontal"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Tabulator
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                </ul>
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="javascript:;" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="memory-stick"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Overlay</div>
                    <i data-tw-merge="" data-lucide="chevron-down"
                        class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                </a>
                <!-- BEGIN: Second Child -->
                <ul class="hidden">
                    <li>
                        <a href="razor-modal.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="menu-square"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Modal
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                    <li>
                        <a href="razor-slideover.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="newspaper"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Slide Over
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                    <li>
                        <a href="razor-notification.html" class="side-menu__link ">
                            <i data-tw-merge="" data-lucide="panel-bottom"
                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                            <div class="side-menu__link__title">
                                Notification
                            </div>
                        </a>
                        <!-- BEGIN: Third Child -->
                        <!-- END: Third Child -->
                    </li>
                </ul>
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-tab.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="package2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Tab</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-accordion.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="pocket" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Accordion</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-button.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="plus-square"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Button</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-alert.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="presentation"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Alert</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-progress-bar.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="shield-ellipsis"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Progress Bar</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-tooltip.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="clapperboard"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Tooltip</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-dropdown.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="flip-vertical"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Dropdown</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-typography.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="file-type2"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Typography</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-icon.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="aperture" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Icon</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-loading-icon.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="droplets" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Loading Icon</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-regular-form.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="gallery-horizontal-end"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Regular Form</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-datepicker.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="microwave" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Datepicker</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-tom-select.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="disc3" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Tom Select</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-file-upload.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="sandwich" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">File Upload</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-wysiwyg-editor.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="hop-off" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Wysiwyg Editor</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-validation.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="clipboard-type"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Validation</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-chart.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="pie-chart" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Chart</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-slider.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="kanban-square"
                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Slider</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <li>
                <a href="razor-image-zoom.html" class="side-menu__link ">
                    <i data-tw-merge="" data-lucide="image" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                    <div class="side-menu__link__title">Image Zoom</div>
                </a>
                <!-- BEGIN: Second Child -->
                <!-- END: Second Child -->
            </li>
            <!-- END: First Child -->
        </ul>
    </div>
</div>
