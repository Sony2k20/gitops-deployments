# Argo Applications
This Repository contains various Helm Charts for K3s, Treafik, Cert-Manager and other applications deplyoed by ArgoCD.

Install Order for K3s setup.

```
kubectl apply -f k3s-config

helm dependency build helm-charts/cert-manager/.
helm upgrade -i cert-manager helm-charts/cert-manager/. --namespace cert-manager --wait --create-namespace # install twice for cluster issuer

helm dependency build helm-charts/argocd/.
helm upgrade -i argocd helm-charts/argocd/.  --namespace argocd --wait --create-namespace
```

After installation get initial ArgoCD secret for login.
```
kubectl -n argocd get secret argocd-initial-admin-secret -o jsonpath="{.data.password}" | base64 -d
```