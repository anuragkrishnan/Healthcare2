<div class="row g-4 m-6">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm" style="background-color: var(--dark)">
                    <div class="card-body p-4" id="theme-color-demo">


                        <div class="row mb-3 g-2">
                            <div class="col-sm-6">
                                <p class="text-secondary mb-4"><strong style="display:block; margin-bottom:10px;">🎨
                                        Theme Color
                                        Demo</strong>
                                </p>
                                <div style="margin-bottom:10px;">
                                    <label for="headerColor"
                                        style="color:#eee; display:block; margin-bottom:4px;">Choose
                                        Header Color</label>
                                    <input type="color" id="headerColor" value="#000000"
                                        style="width:50%; height:32px; border:none; cursor:pointer;">
                                </div>

                                <div style="margin-bottom:10px;">
                                    <label for="sidebarColor"
                                        style="color:#eee; display:block; margin-bottom:4px;">Choose
                                        Sidebar
                                        Color</label>
                                    <input type="color" id="sidebarColor" value="#000000"
                                        style="width:50%; height:32px; border:none; cursor:pointer;">
                                </div>

                                <div style="margin-bottom:10px;">
                                    <label for="footerColor"
                                        style="color:#eee; display:block; margin-bottom:4px;">Choose
                                        Footer
                                        Color</label>
                                    <input type="color" id="footerColor" value="#000000"
                                        style="width:50%; height:32px; border:none; cursor:pointer;">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-secondary mb-4"><strong style="display:block; margin-bottom:10px;">🎨
                                        Choose Font Size & Color </strong>
                                </p>
                                <div style="margin-bottom:10px;">
                                    <label for="fontSizeRange" style="color:#eee; display:block; margin-bottom:4px;">
                                        Choose Font Size (<span id="fontSizeValue">16</span>px)
                                    </label>
                                    <input type="range" id="fontSizeRange" min="12" max="24"
                                        value="16" step="1" style="width:50%; cursor:pointer;">
                                </div>

                                <div style="margin-bottom:10px;">
                                    <label for="fontColor" style="color:#eee; display:block; margin-bottom:4px;">Choose
                                        Font
                                        Color</label>
                                    <input type="color" id="fontColor" value="#eeeeee"
                                        style="width:50%; height:32px; border:none; cursor:pointer;">
                                </div>
                            </div>
                            <button id="resetThemeColors" class="btn btn-primary col-offset-1">Reset
                                to default</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
