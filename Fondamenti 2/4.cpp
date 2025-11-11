// 2. STAMPARE LA TABELLINA DEL 10 BEN FORMATTATA

#include <iostream>
using namespace std;

const int rowSize = 3;
const int colSize = 4;

bool verifica(int m[][colSize], int rowSize, int colSize);
void print(int m[][colSize], int rowSize, int colSize);

int main()
{
    int m[rowSize][colSize] = {
        0, 1, 2, 3,
        4, 5, 6, 7,
        8, 9, 10, 11
    };
    
    verifica(m, rowSize, colSize);
    
    print(m, rowSize, colSize);

	return 0;
}

bool verifica(int m[][colSize], int rowSize, int colSize)
{
    bool trovate = false;
    
    for(int r1=0; r1<rowSize; ++r1)
        {
            for(int r2=r1+1; r2<rowSize; ++r2)
                {
                    bool identiche = true;
                    
                    for(int c=0; c<colSize; ++c)
                        {
                            if(m[r1][c]!=m[r2][c])
                                identiche = false;
                        }
                    if(identiche==true)
                        trovate=true;
                }
        }
    return trovate;
}

void print(int m[][colSize], int rowSize, int colSize)
{
    for(int i=0; i<rowSize; ++i)
        {
            for(int j=0; j<colSize; ++j)
                {
                    cout<<m[i][j]<<"\t";
                }
            cout<<endl;
        }
}