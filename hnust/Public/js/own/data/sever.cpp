#include<stdio.h>
#include<poll.h>
#include<sys/types.h>
#include<sys/socket.h>
#include<arpa/inet.h>
#include<unistd.h>
#include<string.h>

#define ADDR "127.0.0.1"
#define PORT 8080
#define PORT_APACHE 8088
#define SIZE 1024
using namespace std;
int main()
{
    int ret=0;
    int maxsocket;
    int apa,ser,cli;
    char buf[SIZE]={0};
    char apabuf[SIZE]={0};
    struct sockaddr_in apaaddr,seraddr,cliaddr;
    socklen_t clilen=sizeof(cliaddr);

            apaaddr.sin_family=AF_INET;
            apaaddr.sin_addr.s_addr=inet_addr(ADDR);
            apaaddr.sin_port=htons(PORT);
            apa=socket(AF_INET,SOCK_STREAM,0);
            memset(buf,0,SIZE);
            memset(apabuf,0,SIZE);
           if(connect(apa,(struct sockaddr*)&apaaddr,sizeof(apaaddr))==0)
                 printf("success\n");
            else {
             printf("error\n");
            }
            send(apa,"123",SIZE,0);
             printf("1\n");
            recv(apa,apabuf,SIZE,0);
            printf("2\n");
            printf("%s\n",apabuf);
    return 0;
}

