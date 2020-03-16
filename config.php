<?php

# Settings can also be overwritten in two ways
#
# First priority
# A .txt file with the same name as the setting in /data/settingoverrides
# the content of the file is used as the setting value
#
# Second priority
# An environment variable with the same name as the setting and prefix "GROCY_"
# so for example "GROCY_BASE_URL"
#
# Third priority
# The settings defined here below

error_reporting(E_ERROR | E_PARSE);
