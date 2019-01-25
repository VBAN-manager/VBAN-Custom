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
                    <input type="hidden" name="args" value="/my/script/here.sh" />
                    <button type="submit" class="btn btn-success">
                        Command #1 (script)
                    </button>
                </div>
            </form>
            <form role="form" action="plugin_action.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="name" value="VBAN-Custom" />
                    <input type="hidden" name="args" value="command blabla -w -p -o /home/pi/test" />
                    <button type="submit" class="btn btn-success">
                        Command #2 (software)
                    </button>
                </div>
            </form>
            <form role="form" action="plugin_action.php" method="get">
                <div class="form-group">
                    <input type="hidden" name="name" value="VBAN-Custom" />
                    <input type="hidden" name="args" value="pkill test" />
                    <button type="submit" class="btn btn-success">
                        Command #3 (kill software)
                    </button>
                </div>
            </form>
		</div>
