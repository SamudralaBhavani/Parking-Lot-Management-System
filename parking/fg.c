#include <stdio.h>
#include <stdlib.h>
struct knap
{
    int p,w;
    double ratio;
};
int cmp(const void *a,const void*b)
{
    struct knap *x=(struct knap *)a,*y=(struct knap *)b;
    if(y->ratio > x->ratio)return 1;
    else if(y->ratio < x->ratio )return -1;
    else return 0;
}
int main()
{
    int n,m;//n-number of objects,m-capacity of the bag
    scanf("%d%d",&n,&m);
    struct knap a[n];//n items
    for(int i=0;i<n;i++)
    {
        scanf("%d%d",&a[i].w,&a[i].p);//reading ith object weight and profit
        a[i].ratio=a[i].p/(double)a[i].w;//profit per i unit of weight of an item
    }
    qsort(a,n,sizeof(struct knap),cmp);
    double profit=0;//profit to caluclate max profit
    int i=0;
    while(a[i].w<=m)//weight of ith object is less or equal to remaining m-capacity
    {
        profit+=a[i].p;
        m-=a[i].w;
        i++;
    }
    if(i<n && m>0)
    {
        profit+=(a[i].ratio*m);
    }
    printf("%lf",profit);
    return 0;
}
