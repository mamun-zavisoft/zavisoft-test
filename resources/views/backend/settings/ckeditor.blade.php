<div class="w-full bg-neutral-secondary-medium border border-default-medium rounded-base">
    <div class="p-2 border-b border-default-medium">
        <div class="flex flex-wrap items-center">
            <div class="flex items-center space-x-1 rtl:space-x-reverse flex-wrap">
                <button id="toggleBoldButton" data-tooltip-target="tooltip-bold" type="button"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 5h4.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0-7H6m2 7h6.5a3.5 3.5 0 1 1 0 7H8m0-7v7m0 0H6" />
                    </svg>
                    <span class="sr-only">Bold</span>
                </button>
                <div id="tooltip-bold" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Toggle bold
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleItalicButton" data-tooltip-target="tooltip-italic" type="button"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m8.874 19 6.143-14M6 19h6.33m-.66-14H18" />
                    </svg>
                    <span class="sr-only">Italic</span>
                </button>
                <div id="tooltip-italic" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Toggle italic
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleUnderlineButton" data-tooltip-target="tooltip-underline" type="button"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M6 19h12M8 5v9a4 4 0 0 0 8 0V5M6 5h4m4 0h4" />
                    </svg>
                    <span class="sr-only">Underline</span>
                </button>
                <div id="tooltip-underline" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Toggle underline
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleStrikeButton" data-tooltip-target="tooltip-strike" type="button"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 6.2V5h12v1.2M7 19h6m.2-14-1.677 6.523M9.6 19l1.029-4M5 5l6.523 6.523M19 19l-7.477-7.477" />
                    </svg>
                    <span class="sr-only">Strike</span>
                </button>
                <div id="tooltip-strike" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Toggle strike
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleHighlightButton" data-tooltip-target="tooltip-highlight" type="button"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M9 20H5.5c-.27614 0-.5-.2239-.5-.5v-3c0-.2761.22386-.5.5-.5h13c.2761 0 .5.2239.5.5v3c0 .2761-.2239.5-.5.5H18m-6-1 1.42 1.8933c.04.0534.12.0534.16 0L15 19m-7-6 3.9072-9.76789c.0335-.08381.1521-.08381.1856 0L16 13m-8 0H7m1 0h1.5m6.5 0h-1.5m1.5 0h1m-7-3.00001h4" />
                    </svg>
                    <span class="sr-only">Highlight</span>
                </button>
                <div id="tooltip-highlight" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Toggle highlight
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleCodeButton" type="button" data-tooltip-target="tooltip-code"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
                    </svg>
                    <span class="sr-only">Code</span>
                </button>
                <div id="tooltip-code" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Format code
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleLinkButton" data-tooltip-target="tooltip-link" type="button"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
                    </svg>
                    <span class="sr-only">Link</span>
                </button>
                <div id="tooltip-link" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Add link
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="removeLinkButton" data-tooltip-target="tooltip-remove-link" type="button"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M13.2131 9.78732c-.6359-.63557-1.4983-.99259-2.3974-.99259-.89911 0-1.76143.35702-2.39741.99259l-3.4253 3.42528C4.35719 13.8485 4 14.7108 4 15.61c0 .8992.35719 1.7616.99299 2.3974.63598.6356 1.4983.9926 2.39742.9926.89912 0 1.76144-.357 2.39742-.9926l.32157-.3043m-.32157-4.4905c.63587.6358 1.49827.993 2.39747.993.8991 0 1.7615-.3572 2.3974-.993l3.4243-3.42528c.6358-.63585.993-1.49822.993-2.39741 0-.89919-.3572-1.76156-.993-2.39741C17.3712 4.357 16.509 4 15.6101 4c-.899 0-1.7612.357-2.397.9925l-1.0278.96062m7.3873 14.04678-1.7862-1.7862m0 0L16 16.4274m1.7864 1.7863 1.7862-1.7863m-1.7862 1.7863L16 20" />
                    </svg>
                    <span class="sr-only">Remove link</span>
                </button>
                <div id="tooltip-remove-link" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Remove link
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleTextSizeButton" data-dropdown-toggle="textSizeDropdown" type="button"
                    data-tooltip-target="tooltip-text-size"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 6.2V5h11v1.2M8 5v14m-3 0h6m2-6.8V11h8v1.2M17 11v8m-1.5 0h3" />
                    </svg>
                    <span class="sr-only">Text size</span>
                </button>
                <div id="tooltip-text-size" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Text size
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="textSizeDropdown"
                    class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-72">
                    <ul class="p-2 space-y-1 text-sm text-body font-medium" aria-labelledby="toggleTextSizeButton">
                        <li>
                            <button data-text-size="16px" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">16px
                                (Default)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="12px" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-xs">12px
                                (Tiny)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="14px" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm">14px
                                (Small)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="18px" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-lg">18px
                                (Lead)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="24px" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-2xl">24px
                                (Large)
                            </button>
                        </li>
                        <li>
                            <button data-text-size="36px" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-4xl">36px
                                (Huge)
                            </button>
                        </li>
                    </ul>
                </div>
                <button id="toggleTextColorButton" data-dropdown-toggle="textColorDropdown" type="button"
                    data-tooltip-target="tooltip-text-color"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m6.08169 15.9817 1.57292-4m-1.57292 4h-1.1m1.1 0h1.65m-.07708-4 2.72499-6.92967c.0368-.09379.1673-.09379.2042 0l2.725 6.92967m-5.65419 0h-.00607m.00607 0h5.65419m0 0 .6169 1.569m5.1104 4.453c0 1.1025-.8543 1.9963-1.908 1.9963s-1.908-.8938-1.908-1.9963c0-1.1026 1.908-4.1275 1.908-4.1275s1.908 3.0249 1.908 4.1275Z" />
                    </svg>
                    <span class="sr-only">Text color</span>
                </button>
                <div id="tooltip-text-color" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Text color
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="textColorDropdown" class="z-10 hidden w-48 rounded-sm bg-neutral-primary-soft p-2 shadow-sm">
                    <div
                        class="grid grid-cols-6 gap-2 group mb-3 items-center p-1.5 rounded hover:bg-neutral-tertiary">
                        <input type="color" id="color" value="#e66465"
                            class="border-default-medium
                         border bg-neutral-tertiary rounded p-px px-1 w-full h-8 col-span-3" />
                        <label for="color"
                            class="text-body text-xs font-medium col-span-3 group-hover:text-heading">Pick a
                            color</label>
                    </div>
                    <div class="grid grid-cols-6 gap-1 mb-3">
                        <button type="button" data-hex-color="#1A56DB" style="background-color: #1A56DB"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Blue</span></button>
                        <button type="button" data-hex-color="#0E9F6E" style="background-color: #0E9F6E"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Green</span></button>
                        <button type="button" data-hex-color="#FACA15" style="background-color: #FACA15"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Yellow</span></button>
                        <button type="button" data-hex-color="#F05252" style="background-color: #F05252"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Red</span></button>
                        <button type="button" data-hex-color="#FF8A4C" style="background-color: #FF8A4C"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Orange</span></button>
                        <button type="button" data-hex-color="#0694A2" style="background-color: #0694A2"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Teal</span></button>
                        <button type="button" data-hex-color="#B4C6FC" style="background-color: #B4C6FC"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light indigo</span></button>
                        <button type="button" data-hex-color="#8DA2FB" style="background-color: #8DA2FB"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Indigo</span></button>
                        <button type="button" data-hex-color="#5145CD" style="background-color: #5145CD"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Purple</span></button>
                        <button type="button" data-hex-color="#771D1D" style="background-color: #771D1D"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Brown</span></button>
                        <button type="button" data-hex-color="#FCD9BD" style="background-color: #FCD9BD"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light orange</span></button>
                        <button type="button" data-hex-color="#99154B" style="background-color: #99154B"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Bordo</span></button>
                        <button type="button" data-hex-color="#7E3AF2" style="background-color: #7E3AF2"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Dark Purple</span></button>
                        <button type="button" data-hex-color="#CABFFD" style="background-color: #CABFFD"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light</span></button>
                        <button type="button" data-hex-color="#D61F69" style="background-color: #D61F69"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Dark Pink</span></button>
                        <button type="button" data-hex-color="#F8B4D9" style="background-color: #F8B4D9"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Pink</span></button>
                        <button type="button" data-hex-color="#F6C196" style="background-color: #F6C196"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Cream</span></button>
                        <button type="button" data-hex-color="#A4CAFE" style="background-color: #A4CAFE"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light Blue</span></button>
                        <button type="button" data-hex-color="#5145CD" style="background-color: #5145CD"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Dark Blue</span></button>
                        <button type="button" data-hex-color="#B43403" style="background-color: #B43403"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Orange Brown</span></button>
                        <button type="button" data-hex-color="#FCE96A" style="background-color: #FCE96A"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light Yellow</span></button>
                        <button type="button" data-hex-color="#1E429F" style="background-color: #1E429F"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Navy Blue</span></button>
                        <button type="button" data-hex-color="#768FFD" style="background-color: #768FFD"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light Purple</span></button>
                        <button type="button" data-hex-color="#BCF0DA" style="background-color: #BCF0DA"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light Green</span></button>
                        <button type="button" data-hex-color="#EBF5FF" style="background-color: #EBF5FF"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Sky Blue</span></button>
                        <button type="button" data-hex-color="#16BDCA" style="background-color: #16BDCA"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Cyan</span></button>
                        <button type="button" data-hex-color="#E74694" style="background-color: #E74694"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Pink</span></button>
                        <button type="button" data-hex-color="#83B0ED" style="background-color: #83B0ED"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Darker Sky Blue</span></button>
                        <button type="button" data-hex-color="#03543F" style="background-color: #03543F"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Forest Green</span></button>
                        <button type="button" data-hex-color="#111928" style="background-color: #111928"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Black</span></button>
                        <button type="button" data-hex-color="#4B5563" style="background-color: #4B5563"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Stone</span></button>
                        <button type="button" data-hex-color="#6B7280" style="background-color: #6B7280"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Gray</span></button>
                        <button type="button" data-hex-color="#D1D5DB" style="background-color: #D1D5DB"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Light Gray</span></button>
                        <button type="button" data-hex-color="#F3F4F6" style="background-color: #F3F4F6"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Cloud Gray</span></button>
                        <button type="button" data-hex-color="#F3F4F6" style="background-color: #F3F4F6"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Cloud Gray</span></button>
                        <button type="button" data-hex-color="#F9FAFB" style="background-color: #F9FAFB"
                            class="w-6 h-6 rounded-md"><span class="sr-only">Heaven Gray</span></button>
                    </div>
                    <button type="button" id="reset-color"
                        class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-xs px-3 py-1.5 focus:outline-none w-full">Reset
                        color</button>
                </div>
                <button id="toggleFontFamilyButton" data-dropdown-toggle="fontFamilyDropdown" type="button"
                    data-tooltip-target="tooltip-font-family"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m10.5785 19 4.2979-10.92966c.0369-.09379.1674-.09379.2042 0L19.3785 19m-8.8 0H9.47851m1.09999 0h1.65m7.15 0h-1.65m1.65 0h1.1m-7.7-3.9846h4.4M3 16l1.56685-3.9846m0 0 2.73102-6.94506c.03688-.09379.16738-.09379.20426 0l2.50367 6.94506H4.56685Z" />
                    </svg>
                    <span class="sr-only">Font family</span>
                </button>
                <div id="tooltip-font-family" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Font Family
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <div id="fontFamilyDropdown"
                    class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-48">
                    <ul class="p-2 space-y-1 text-sm text-body font-medium" aria-labelledby="toggleFontFamilyButton">
                        <li>
                            <button data-font-family="Inter, ui-sans-serif" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm">Default
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Arial, sans-serif" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: Arial, sans-serif;">Arial
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Courier New', monospace" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: 'Courier New', monospace;">Courier New
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Georgia, serif" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: Georgia, serif;">Georgia
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Lucida Sans Unicode', sans-serif" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: 'Lucida Sans Unicode', sans-serif;">Lucida Sans Unicode
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Tahoma, sans-serif" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: Tahoma, sans-serif;">Tahoma
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Times New Roman', serif;" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: 'Times New Roman', serif;">Times New Roman
                            </button>
                        </li>
                        <li>
                            <button data-font-family="'Trebuchet MS', sans-serif" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: 'Trebuchet MS', sans-serif;">Trebuchet MS
                            </button>
                        </li>
                        <li>
                            <button data-font-family="Verdana, sans-serif" type="button"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded text-sm"
                                style="font-family: Verdana, sans-serif;">Verdana
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="px-1">
                    <span class="block w-px h-4 bg-neutral-quaternary"></span>
                </div>
                <button id="toggleLeftAlignButton" type="button" data-tooltip-target="tooltip-left-align"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 6h8m-8 4h12M6 14h8m-8 4h12" />
                    </svg>
                    <span class="sr-only">Align left</span>
                </button>
                <div id="tooltip-left-align" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Align left
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleCenterAlignButton" type="button" data-tooltip-target="tooltip-center-align"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 6h8M6 10h12M8 14h8M6 18h12" />
                    </svg>
                    <span class="sr-only">Align center</span>
                </button>
                <div id="tooltip-center-align" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Align center
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button id="toggleRightAlignButton" type="button" data-tooltip-target="tooltip-right-align"
                    class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 6h-8m8 4H6m12 4h-8m8 4H6" />
                    </svg>
                    <span class="sr-only">Align right</span>
                </button>
                <div id="tooltip-right-align" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                    Align right
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-2 pt-2 flex-wrap">
            <button id="typographyDropdownButton" data-dropdown-toggle="typographyDropdown"
                class="flex items-center justify-center text-body bg-neutral-primary-strong border border-default-strong hover:bg-neutral-secondary-strongest hover:text-heading focus:ring-4 focus:ring-neutral-tertiary-soft shadow-xs font-medium leading-5 rounded-base text-xs px-3 py-1.5 focus:outline-none"
                type="button">
                Format
                <svg class="w-3.5 h-3.5 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 9-7 7-7-7" />
                </svg>
            </button>
            <div class="ps-1.5">
                <span class="block w-px h-4 bg-neutral-quaternary"></span>
            </div>
            <!-- Heading Dropdown -->
            <div id="typographyDropdown"
                class="z-10 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-72">
                <ul class="p-2 space-y-1 text-sm text-body font-medium" aria-labelledby="typographyDropdownButton">
                    <li>
                        <button id="toggleParagraphButton" type="button"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Paragraph
                            <div class="space-x-1.5 ms-4">
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Cmd</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Alt</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">0</kbd>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button data-heading-level="1" type="button"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Heading
                            1
                            <div class="space-x-1.5 ms-4">
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Cmd</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Alt</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">1</kbd>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button data-heading-level="2" type="button"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Heading
                            2
                            <div class="space-x-1.5 ms-4">
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Cmd</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Alt</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">2</kbd>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button data-heading-level="3" type="button"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Heading
                            3
                            <div class="space-x-1.5 ms-4">
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Cmd</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Alt</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">3</kbd>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button data-heading-level="4" type="button"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Heading
                            4
                            <div class="space-x-1.5 ms-4">
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Cmd</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Alt</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">4</kbd>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button data-heading-level="5" type="button"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Heading
                            5
                            <div class="space-x-1.5 ms-4">
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Cmd</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Alt</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">5</kbd>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button data-heading-level="6" type="button"
                            class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Heading
                            6
                            <div class="space-x-1.5 ms-4">
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Cmd</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">Alt</kbd>
                                <kbd
                                    class="px-2 py-1 text-xs font-semibold text-body bg-neutral-tertiary-medium border border-default-strong rounded">6</kbd>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
            <button id="addImageButton" type="button" data-tooltip-target="tooltip-image"
                class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m3 16 5-7 6 6.5m6.5 2.5L16 13l-4.286 6M14 10h.01M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                </svg>
                <span class="sr-only">Add image</span>
            </button>
            <div id="tooltip-image" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                Add image
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button id="addVideoButton" type="button" data-tooltip-target="tooltip-video"
                class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                        d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1ZM9 12h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1Zm5.697 2.395v-.733l1.269-1.219v2.984l-1.268-1.032Z" />
                </svg>
                <span class="sr-only">Add video</span>
            </button>
            <div id="tooltip-video" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                Add video
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button id="toggleListButton" type="button" data-tooltip-target="tooltip-list"
                class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                </svg>
                <span class="sr-only">Toggle list</span>
            </button>
            <div id="tooltip-list" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                Toggle list
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button id="toggleOrderedListButton" type="button" data-tooltip-target="tooltip-ordered-list"
                class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6h8m-8 6h8m-8 6h8M4 16a2 2 0 1 1 3.321 1.5L4 20h5M4 5l2-1v6m-2 0h4" />
                </svg>
                <span class="sr-only">Toggle ordered list</span>
            </button>
            <div id="tooltip-ordered-list" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                Toggle ordered list
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button id="toggleBlockquoteButton" type="button" data-tooltip-target="tooltip-blockquote-list"
                class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V8a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1Zm0 0v2a4 4 0 0 1-4 4H5m14-6V8a1 1 0 0 0-1-1h-3a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1Zm0 0v2a4 4 0 0 1-4 4h-1" />
                </svg>
                <span class="sr-only">Toggle blockquote</span>
            </button>
            <div id="tooltip-blockquote-list" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                Toggle blockquote
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <button id="toggleHRButton" type="button" data-tooltip-target="tooltip-hr-list"
                class="p-1.5 text-body rounded-sm cursor-pointer hover:text-heading hover:bg-neutral-quaternary">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 12h14" />
                    <path stroke="currentColor" stroke-linecap="round"
                        d="M6 9.5h12m-12-2h12m-12-2h12m-12 13h12m-12-2h12m-12-2h12" />
                </svg>
                <span class="sr-only">Toggle Horizontal Rule</span>
            </button>
            <div id="tooltip-hr-list" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-dark-strong rounded-base shadow-xs opacity-0 tooltip">
                Toggle Horizontal Rule
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </div>
    <div class="px-4 py-2 bg-neutral-primary rounded-b-lg">
        <label for="wysiwyg-example" class="sr-only">Publish post</label>
        <div id="wysiwyg-example"class="block w-full px-0 text-sm text-body bg-neutral-primary border-0 focus:ring-0">
        </div>
    </div>
</div>
