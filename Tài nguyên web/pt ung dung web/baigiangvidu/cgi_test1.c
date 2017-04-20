#include <stdio.h>
#include <stdlib.h>     /* getenv */

int strton (char *str);

main () {
	char *p, *pMethod, *pLen, *pQuery, sQuery[1024];
	int len;
	printf ("Content-type: text/html\n\n");
	printf ("<html><head><title>CGI test</title></head>");
	printf ("<body>");

	pMethod = getenv ("REQUEST_METHOD");
	if (pMethod != NULL) {
		printf ("<br />Request method: %s", pMethod);
	}
	pQuery = getenv ("QUERY_STRING");
	if (pMethod != NULL) {
		printf ("<br />Query string from env: %s", pQuery);
	}
	pLen = getenv ("CONTENT_LENGTH");
	if (pLen != NULL) {
		len = strton (pLen);
		printf ("<br />Content length: %s -> %d", pLen, len);
	}
	fgets (sQuery, len, stdin);
	printf ("<br />Query string from stdin: %s", sQuery);

	printf ("</body></html>");
}

int strton (char *str) {
	char *p;
	int retval = 0;
	p=str;
	while (*p) {
		retval *= 10;
		retval += *p-48;
		p++;
	}
	return ++retval;
}
