#!/bin/bash
grep -rl "include_once" * | \
    xargs -I{} \
    perl -i -pe \
    "s/(?<=include_once)[ '\"\(]*([^'\"]*)[ '\")]*;/ '\1';/" \
    {}


