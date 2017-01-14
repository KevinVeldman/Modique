<div class="row newNav">
    <div class="container-fluid">
        <div id="navigator" class="navbar navbar-default " role="navigation">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="http://www.modique.nl">Modique</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php if($currentpage == "index"){echo "active";}?>"><a href="../index.php">Home</a>
                        </li>
                        <li class="<?php if($currentpage == "merken"){echo "active";}?>"><a href="../merken.php"">Merken</a>
                        </li>
                        <li class="<?php if($currentpage == "contact"){echo "active";}?>"><a href="../contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>