<?php

// set the default directory to /
$directory = "/";


/* code here for an input box to alter the default */


$prefab = <<<END
time {
FS='$directory';\
NUMRESULTS=20; \
resize;\
clear;\
echo -e "\\nLargest Files and Directories:\\n==============================\\n";\
echo -e "Report Generated: `date`\\n";\
df -h \$FS; \
echo -e "\\nLargest Directories:\\n====================\\n"; \
du -x \$FS 2>/dev/null| sort -rnk1| head -n \$NUMRESULTS| awk '{printf "%d MB %s\n",\
$1/1024,$2}';\
echo -e "\\nLargest Files:\\n==============\\n";\
nice -n 19 find $FS -mount -type f -ls \
2>/dev/null| sort -rnk7| head -n \$NUMRESULTS|awk '{printf "%d MB\t%s\n",\
($7/1024)/1024,$NF}';\
echo -e "\\nReport Finished: `date`\\n"
}
END;

echo "<textarea  rows=\"24\" cols=\"50\">$prefab</textarea>";


?>
