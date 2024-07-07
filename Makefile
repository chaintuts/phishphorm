# This file contains a make script for the PhishPhorm application
#
# Author: Josh McIntyre
#

# This block defines makefile variables
SRC_CLIENT_FILES=src/client/*.js
SRC_SERVER_FILES=src/server/*.php
SRC_MARKUP_FILES=src/markup/*
RES_FILES=res/*.txt


BUILD_DIR=bin/phishphorm

# This rule builds the application
build: $(SRC_CLIENT_FILES) $(SRC_SERVER_FILES) $(SRC_MARKUP_FILES) $(RES_FILES)
	mkdir -p $(BUILD_DIR)
	cp $(SRC_CLIENT_FILES) $(BUILD_DIR)
	cp $(SRC_SERVER_FILES) $(BUILD_DIR)
	cp $(SRC_MARKUP_FILES) $(BUILD_DIR)
	cp $(RES_FILES) $(BUILD_DIR)

# This rule cleans the build directory
clean: $(BUILD_DIR)
	rm $(BUILD_DIR)/*
	rmdir $(BUILD_DIR)
