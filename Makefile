
SOURCES =			\
	about.html		\
	formats.html		\
	hardware.html		\
	index.html		\
	images/*		\
	services.html		\
	styles/*		\
	support/index.html	\

default:
	rm -f smk_www.tar
	tar cf smk_www.tar $(SOURCES)