<?php
$page = "plugins-VBAN-Custom";
?>
    <div class="col-md-8">
			<h3 class="mb-5">
				Custom actions
			</h3>
            
            <form role="form" action="plugin_action.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="name" value="VBAN-Custom" />
                    <input type="hidden" name="args" value="/home/pi/qlc.sh" />
                    <button type="submit" class="btn btn-success">
                        QLC
                    </button>
                </div>
            </form>
            <form role="form" action="plugin_action.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="name" value="VBAN-Custom" />
                    <input type="hidden" name="args" value="xvfb-run qlcplus -w -p -o /home/pi/Vidéos/Balade/videos.qxw" />
                    <button type="submit" class="btn btn-success">
                        QLC Balade des gens heureux
                    </button>
                </div>
            </form>
            <form role="form" action="plugin_action.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="name" value="VBAN-Custom" />
                    <input type="hidden" name="args" value="pkill qlcplus" />
                    <button type="submit" class="btn btn-success">
                        Kill QLC
                    </button>
                </div>
            </form>
		</div>