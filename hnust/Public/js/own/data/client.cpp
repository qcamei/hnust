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
    int maxsocket;
    int ser,cli;
    char buf[SIZE]={0};
    struct sockaddr_in apaaddr,seraddr,cliaddr;
    socklen_t clilen=sizeof(cliaddr);
    seraddr.sin_family=AF_INET;
    seraddr.sin_addr.s_addr=inet_addr(ADDR);
    seraddr.sin_port=htons(PORT_APACHE);
    ser=socket(AF_INET,SOCK_STREAM,0);
    bind(ser,(struct sockaddr*)&seraddr,sizeof(seraddr));
    listen(ser,5);
    while(1)
    {
            printf("link success!\n");
            memset(buf,0,SIZE);
            cli=accept(ser,(struct sockaddr*)&cliaddr,&clilen);
            if(cli==0)
               printf("success\n");
            else printf("error\n");
            recv(cli,buf,SIZE,0);
            send(cli,"hello!",SIZE,0);
            close(cli);
    }
    return 0;
}

