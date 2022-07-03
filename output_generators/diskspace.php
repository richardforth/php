<form action="diskspace.php" method="GET">
    Target: <input type="text" name="target" placeholder="/path/to/mountpoint" value="/"> <input type="submit" value="Submit">
</form>

<?php


/* code here to alter the default */
$get_target = htmlspecialchars($_GET['target']);
$target = empty($get_target) ? '/' : $get_target;

$prefab = <<<END
time {
FS='$target';\
NUMRESULTS=20; \
resize;\
clear;\
echo -e "\\nLargest Files and Directories:\\n==============================\\n";\
echo -e "Report Generated: `date`\\n";\
df -h \$FS; \
echo -e "\\nLargest Directories:\\n====================\\n"; \
du -x \$FS 2>/dev/null| sort -rnk1| head -n \$NUMRESULTS| awk '{printf "%d MB %s\\n",\
$1/1024,$2}';\
echo -e "\\nLargest Files:\\n==============\\n";\
nice -n 19 find \$FS -mount -type f -ls \
2>/dev/null| sort -rnk7| head -n \$NUMRESULTS|awk '{printf "%d MB\\t%s\\n",\
($7/1024)/1024,\$NF}';\
echo -e "\\nReport Finished: `date`\\n"
}
END;


echo "<textarea  rows=\"24\" cols=\"90\">$prefab</textarea>";


?>
